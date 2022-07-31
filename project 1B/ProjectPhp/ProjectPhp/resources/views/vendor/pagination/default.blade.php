
@if ($paginator->hasPages())
<ul class="pager" style="display: flex; list-style-type:none; margin-top: 20px">
   
    @if ($paginator->onFirstPage())
        <li style="padding: 5px; margin-inline: 5px" class="disabled"><span> ← Previous </span></li>
    @else
        <li style="padding: 5px; margin-inline: 5px"><a href="{{ $paginator->previousPageUrl() }}" rel="prev"> ← Previous </a></li>
    @endif


  
    @foreach ($elements as $element)
       
        @if (is_string($element))
            <li style="padding: 5px; margin-inline: 5px" class="disabled"><span> {{ $element }} </span></li>
        @endif


       
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li style="padding: 5px; margin-inline: 5px" class="active my-active">
                    <span style="background-color: #5cb85c !important;
                    color: white !important;
                    border-color: #5cb85c !important;"> {{ $page }} </span></li>
                @else
                    <li style="padding: 5px; margin-inline: 5px"><a href="{{ $url }}"> {{ $page }} </a></li>
                @endif
            @endforeach
        @endif
    @endforeach


    
    @if ($paginator->hasMorePages())
        <li style="padding: 5px; margin-inline: 5px"><a href="{{ $paginator->nextPageUrl() }}" rel="next"> Next → </a></li>
    @else
        <li style="padding: 5px; margin-inline: 5px" class="disabled"><span> Next → </span></li>
    @endif
</ul>
@endif 