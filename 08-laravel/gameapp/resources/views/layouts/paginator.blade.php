@if ($paginator->hasPages())
{{-- Previous Page Link --}}
@if ($paginator->onFirstPage())
<li class="disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
@else
<a class="btn-prev" href="{{ $paginator->previousPageUrl() }}">
    <img src="../images/btn-prev.png" alt="prev" />
</a>
@endif

{{-- Next Page Link --}}
@if ($paginator->hasMorePages())
<a class="btn-prev" href="{{ $paginator->nextPageUrl() }}">
        <img src="../images/btn-next.png" alt="prev" />
    </a>
@else
<li class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></li>
@endif
 
@endif
