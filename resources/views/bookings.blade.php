<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <p style = "color:blue">{{session('bookmsg')}}</p>
                <iframe frameborder="0" height = "700" style="overflow:scroll; width: 100%" src="{{url('mybookings')}}" marginheight="1" marginwidth="1" name="cboxmain" id="cboxmain" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe>

            </div>
        </div>
    </div>
</x-app-layout>
