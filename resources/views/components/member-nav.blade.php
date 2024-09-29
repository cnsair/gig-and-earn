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
    <a class="{{ $active === route('member.full-access') ? 'active font-semibold ' : "" }}
        text-lg text-gray-800 leading-tight pass font-medium marg-rt" 
        href="{{ route('member.full-access') }}" >
        {{ __('Full Access') }}
    </a>

    <a class="{{ $active === route('member.testimonial') ? 'active font-semibold ' : "" }}
        text-lg text-gray-800 leading-tight pass font-medium marg-rt" 
        href="{{ route('member.testimonial') }}" >
        {{ __('Testimonials') }}
    </a>

</div>