@props(['name'=>'', 'label'=>'لیبل', 'readonly'=>'', 'text_size'=>'', 'dir'=>''])

@if ($errors->has($name))
    @php($mb = 'mb-0.5')
@else
    @php($mb='mb-5')
@endif

<div class="relative {{$mb}}">
    <input id="{{$name}}" wire:model="{{$name}}" {{$attributes}} {{$readonly}} placeholder=" " autocomplete="off"
           class="block w-full rounded-md pt-3 pb-3 text-center border border-gray-400 bg-transparent {{$text_size}}
                   focus:outline-none focus:ring-1 focus:text-blue-800 text-slate-600 peer {{$dir}}">
    <label for="{{$name}}"
           class="absolute text-sm text-slate-500 transform duration-200 -right-2 -translate-y-[61px] px-2 bg-white
                   cursor-text
                   peer-placeholder-shown:-translate-y-[36px] peer-placeholder-shown:bg-transparent peer-placeholder-shown:p-0
                   peer-placeholder-shown:right-5

                   peer-focus:-translate-y-[61px] peer-focus:px-2 peer-focus:bg-white peer-focus:text-blue-700
                   peer-focus:z-0 peer-focus:right-3">
        {{$label}}
    </label>
    @error($name)
        <div class="min-h-5 mt-0.5 text-sm text-red-600 font-light text-center err_show">
            {{$message}}
        </div>
    @enderror

</div>
