<div class="bg-light text-dark mb-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-8 mt-20">
                <div class="mb-4">
                    <h4 class="bg-black text-white p-2">Random news</h4>
                </div>
                @foreach ($articles as $article)
                    <x-base.front.article-with-without-description :id="$article->id" :desc="true" />
                @endforeach
            </div>
            <div class="col-sm-6 col-md-4">
                <x-base.front.other-articles-rightbar />
            </div>
        </div>
    </div>
</div>
