<section class="document-section mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if($header->document_list_type=="list")
                    @include("frontend.index.list")
                @else
                    @include("frontend.index.card")
                @endif
            </div>
        </div>
    </div>
</section>
