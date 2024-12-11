<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Uploaded Videos') }}
        </x-sub-header>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <!-- Begins here --> 

                    <div class="grid grid-cols-2 gap-4">
                        <!-- =====================================
                                    Professional Videos section
                        =========================================-->
                        <div class="col-span-1">
                            <h1 class="text-xl">Professional Videos</h1>

                            @forelse ($prof_vid_section as $prof_vid)

                                <p class="md:text-base font-bold">{{ $prof_vid->title }}</p>
                                
                                @php
                                    $vid = $prof_vid->file;
                                    $file_url = asset('storage/' . $vid);
                                @endphp

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    <video width="100%" height="100%" controls>
                                        <source src="{{ $file_url }}" type="video/mp4">
                                    </video>
                                </p>
                            
                                <div class="mt-4">

                                    <div class="oneline">
                                        <form method="POST" action="{{ route('upload.toggle', ['upload' => $prof_vid->id]) }}" >
                                            @csrf
                                            @method('PUT')

                                            <x-button type="submit" class="btn">
                                                {{ $prof_vid->status ? 'Show' : 'Hidden' }}
                                            </x-button>
                                        </form>
                                    </div>

                                    <div class="oneline">
                                        <a class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150" href="{{ route('upload.edit', ['upload' => $prof_vid->id]) }}">Edit</a>
                                    </div>

                                    <div class="oneline">
                                        <form action="{{ route('upload.destroy', ['upload' => $prof_vid->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <x-danger-button type="submit"  onclick="return confirm('Are you sure you want to permanently delete this video?');" class="ms-3">
                                                {{ __('Delete') }}
                                            </x-danger-button>
                                        </form>
                                    </div>
                                </div>
                                
                            @empty
                                <p class="font-bold mt-5 ml-5 list-disc list-inside text-red-500">
                                    Nothing to display! Please reload page.
                                </p>
                            @endforelse
                        </div>


                        <!-- =====================================
                                    Professional Videos section
                        =========================================-->
                        <div class="col-span-1">
                            <h2 class="text-xl">Course Videos</h2>
                                
                            @forelse ( $course_vid_section as $course_vid )

                                <p class="md:text-base font-bold">{{ $course_vid->title }}</p>
                                
                                @php
                                    $vid = $course_vid->file;
                                    $file_url = asset('storage/' . $vid);
                                @endphp

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    <video width="100%" height="100%" controls>
                                        <source src="{{ $file_url }}" type="video/mp4">
                                    </video>
                                </p>
                            
                                <div class="mt-4">
                                    <div class="oneline">
                                        <form method="POST" action="{{ route('upload.toggle', ['upload' => $course_vid->id]) }}" >
                                            @csrf
                                            @method('PUT')

                                            <x-button type="submit" class="btn">
                                                {{ $course_vid->status ? 'Show' : 'Hidden' }}
                                            </x-button>
                                        </form>
                                    </div>

                                    <div class="oneline">
                                        <a class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150" href="{{ route('upload.edit', ['upload' => $course_vid->id]) }}">
                                            Edit
                                        </a>
                                    </div>

                                    <div class="oneline">
                                        <form action="{{ route('upload.destroy', ['upload' => $course_vid->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <x-danger-button type="submit" onclick="return confirm('Are you sure you want to permanently delete this record?');" class="ms-3">
                                                {{ __('Delete') }}
                                            </x-danger-button>
                                        </form>
                                    </div>
                                </div>
                                
                            @empty
                                <p class="font-bold mt-5 ml-5 list-disc list-inside text-red-500">
                                    Nothing to display! Please reload page.
                                </p>
                            @endforelse
                        </div>
                    </div>

                <!-- Ends here --> 
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>