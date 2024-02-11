<div class="container">
    @foreach ($articles as $article)
        <x-base.front.article-with-without-description :id="$article->id" :desc="true" />
    @endforeach

</div>
