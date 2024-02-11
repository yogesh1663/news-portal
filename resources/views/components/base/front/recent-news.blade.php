<div class="mb-3 bg-black text-white d-flex justify-content-between align-items-center p-2">
    <h4>Recent News</h4>
    <a href="">All recent news</a>
</div>
<div class="mb-3">
    @foreach ($news as $news_item)
        <x-base.front.article-with-without-description :id="$news_item->id" :desc="false" />
    @endforeach
</div>
