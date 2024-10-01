@php
    $active = route('upload.show');
@endphp

<style>
    .one-line{
        display: block;
    }
    .space{
        padding: 0px 20px 0px 20px;
    }

    .oneline{
        display: inline-flex !important;
    }

    .padn{
        padding: 1%;
    }
   
</style>

<x-app-layout>
    <x-slot name="header">
        <x-admin-nav :active="$active"></x-admin-nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <!-- Begins here --> 

                    <div class="col-span-6">
                        <!-- =====================================
                                    Professional Videos section
                        =========================================-->
                        <h2>Professional Videos</h2>
                        @forelse ($prof_vid_section as $prof_vid)
                            
                            @php
                                $vid = $prof_vid->file;
                                $file_url = asset('storage/' . $vid);
                                $file_ext = pathinfo($vid, PATHINFO_EXTENSION);
                                //$file_ext = $file->extension();
                            @endphp

                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                <video width="40%" height="40%" controls>
                                    <source src="{{ $file_url }}" type="video/mp4">
                                </video>
                            </p>
                        
                            <div style="margin-top: 1%">
                                <div class="oneline">
                                    <a class="btn btn-primary" href="{{ route('upload.edit', ['upload' => $prof_vid->id]) }}">Edit</a>
                                </div>

                                <div class="oneline">
                                    <form action="{{ route('upload.destroy', ['upload' => $prof_vid->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <x-danger-button onclick="return confirm('Are you sure you want to delete this record?');" class="ms-3">
                                            {{ __('Delete') }}
                                        </x-danger-button>

                                        @if (session('status') === 'education-deleted')
                                            <p
                                                x-data="{ show: true }"
                                                x-show="show"
                                                x-transition
                                                x-init="setTimeout(() => show = false, 2000)"
                                                class="text-sm text-gray-600 dark:text-gray-400"
                                            >{{ __('Education Deleted.') }}</p>
                                        @endif
                                    </form>
                                </div>
                            </div>
                            
                        @empty
                            <p>Nothing to display</p>
                        @endforelse
                    </div>


                    <div class="col-span-6">
                        <!-- =====================================
                                    Professional Videos section
                        =========================================-->
                        <h2>Course Videos</h2>
                        @forelse ( $course_vid_section as $course_vid )
                            
                            @php
                                $vid = $course_vid->file;
                                $file_url = asset('storage/' . $vid);
                                $file_ext = pathinfo($vid, PATHINFO_EXTENSION);
                                //$file_ext = $file->extension();
                            @endphp

                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                <video width="40%" height="40%" controls>
                                    <source src="{{ $file_url }}" type="video/mp4">
                                </video>
                            </p>
                        
                            <div style="margin-top: 1%">
                                <div class="oneline">
                                    <a class="green" href="{{ route('upload.edit', ['upload' => $course_vid->id]) }}">Edit</a>
                                </div>

                                <div class="oneline">
                                    <form action="{{ route('upload.destroy', ['upload' => $course_vid->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <x-danger-button onclick="return confirm('Are you sure you want to delete this record?');" class="ms-3">
                                            {{ __('Delete') }}
                                        </x-danger-button>

                                        @if (session('status') === 'upload-deleted')
                                            <p
                                                x-data="{ show: true }"
                                                x-show="show"
                                                x-transition
                                                x-init="setTimeout(() => show = false, 2000)"
                                                class="text-sm text-gray-600 dark:text-gray-400"
                                            >{{ __('upload Deleted.') }}</p>
                                        @endif
                                    </form>
                                </div>
                            </div>
                            
                        @empty
                            <p>Nothing to display</p>
                        @endforelse
                    </div>

                <!-- Ends here --> 
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
h