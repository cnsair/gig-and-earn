@props(['active'])

<style>

    a.pass:hover{
        color: palevioletred;
    }
    
    .space{
        padding: 0px 20px 0px 20px;
    }

    .active{
        color: #dd2850;
    }

    .box {
        /* inline-size: 150px; */
        overflow-wrap: break-word;
        word-wrap: break-word;
    }

    .marg-rt{
        margin-right: 3rem;
    }

</style>

<div>
    <a class="{{ $active === route('upload.create') ? 'active font-semibold' : '' }}
        text-lg text-gray-800 leading-tight pass font-medium marg-rt" 
        href="{{ route('upload.create') }}" >
        {{ __('Upload Video') }}
    </a>

    <a class="{{ $active === route('upload.show') ? 'active font-semibold' : "" }}
        text-lg text-gray-800 leading-tight pass font-medium marg-rt" 
        href="{{ route('upload.show') }}" >
        {{ __('Show Videos') }}
    </a>

    <a class="{{ $active === route('job.create') ? 'active font-semibold' : "" }}
        text-lg text-gray-800 leading-tight pass font-medium marg-rt" 
        href="{{ route('job.create') }}" >
        {{ __('Post Jobs') }}
    </a>

    <a class="{{ $active === route('job.show') ? 'active font-semibold' : "" }}
        text-lg text-gray-800 leading-tight pass font-medium marg-rt" 
        href="{{ route('job.show') }}" >
        {{ __('Show Jobs') }}
    </a>

</div>