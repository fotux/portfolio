@props(['name' =>'', 'placeholder' => 'Įveskite'])

<textarea
name="{{ $name }}"
 placeholder="{{ $placeholder }}"
rows="5"
class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-blue-800 text-gray-800 placeholder-gray-500 transition duration-150 ease-in-out">
</textarea>
