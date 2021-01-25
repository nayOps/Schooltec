<div class="inline-block" >
    <input class="bg-gray-200 text-gray-700 border-2 focus:outline-none placeholder-gray-500n px-2 py-1 rounded-full " 
    placeholder="Rechercher une mission"  type="text"  wire:model="query">

    {{-- @if (strlen($query) > 2) --}}
    <div>
        @if (count($jobs) > 0)
            @foreach ($jobs as $job)
                <p>{{ $job->title }}</p>
            @endforeach
           
        @endif
    </div>
        
    {{-- @endif --}}
</div>
