@props([
    'rutaForm'
])
<div class="pb-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{$rutaForm}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{$slot}}


                    <div class="flex justify-end items-center">

                    <button type="submit" class="mt-4 focus:outline-none text-white  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-semibold rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Enviar</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
