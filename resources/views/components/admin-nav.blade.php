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
    <a class="{{ $active === route('upload.create') ? 'active font-semibold ' : '' }}
        text-lg text-gray-800 leading-tight pass font-medium marg-rt" 
        href="{{ route('upload.create') }}" >
        {{ __('Upload Files') }}
    </a>

    <a class="{{ $active === route('upload.show') ? 'active font-semibold ' : "" }}
        text-lg text-gray-800 leading-tight pass font-medium marg-rt" 
        href="{{ route('upload.show') }}" >
        {{ __('Show Uploads') }}
    </a>

    <a class="{{ $active === route('upload.show') ? 'active font-semibold ' : "" }}
        text-lg text-gray-800 leading-tight pass font-medium marg-rt" 
        href="{{ route('upload.show') }}" >
        {{ __('Anything') }}
    </a>

</div>