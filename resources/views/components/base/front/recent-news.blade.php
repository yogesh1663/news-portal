<div class="d-flex justify-content-between mb-3">
    <div class="col-6">
        <h4>Recent news</h4>
    </div>
    <div class="col-6 text-end">
        <a href="">All recent news</a>
    </div>
</div>
<div class="mb-3">
    @foreach ($news as $news_item)
        <x-base.front.article-without-description :id="$news_item->id" />
    @endforeach
</div>
