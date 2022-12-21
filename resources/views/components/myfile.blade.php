@props([
    'label',
    'labelName',
])

<div class="mt-4">
<label class="block text-sm font-medium text-gray-900 dark:text-gray-300" for="{{$labelName}}">{{$label}}</label>
<input name="{{$labelName}}" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="{{$labelName}}" type="file">
</div>


