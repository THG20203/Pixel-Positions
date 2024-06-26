{{-- flex-col means top to bottom --}}
<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 group">
    {{-- make employer on  the far left with self start --}}
    <div class="self-start text-sm">Laracasts</div>

    <div class="py-8 font-bold">
        <h3 class="group-hover:text-blue-600">Video Producer</h3>
        <p>Full Time - From $60,000</p>
    </div>
    {{-- Items-center is used to align flex items along the cross axis in the center.  --}}

    {{-- Items-center to a container, all the direct children of this container will be centered vertically if the flex direction is row  --}}

    {{-- mt-auto will not make a difference in this case, but in cases where theres more margin to be had, will force the 
            section below to be at the very bottom of the card --}}
    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>
        <x-employer-logo :width="42" />
    </div>
</div>