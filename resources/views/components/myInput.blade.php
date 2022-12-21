@props([
    'labelName',
    'label',
])
<div class="mt-4">
<label for="{{$labelName}}" name="{{$labelName}}" class="block text-sm font-medium text-gray-900 dark:text-gray-300">{{$label}}</label>

<input type="text" id="{{$labelName}}" name="{{$labelName}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"{{$attributes->merge([])}} value="{{$slot}}" required>
</div>
