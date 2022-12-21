@props([
    'id',
    'hidden' => $hidden == 'true' ? 'hiden' : '',
    'pregunta',
    'respuesta',
])

<h2 id="accordion-flush-heading-{{$id}}">
    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-accordion-target="#accordion-flush-body-{{$id}}" aria-expanded="true" aria-controls="accordion-flush-body-{{$id}}">
        <span>

            {{$pregunta}}

        </span>
        <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
    </h2>

    <div id="accordion-flush-body-{{$id}}" class="{{$hidden}}" aria-labelledby="accordion-flush-heading-{{$id}}">
        <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
            <p class="mb-2 text-gray-500 dark:text-gray-400">

                {{$respuesta}}

            <p>
        </div>
    </div>
