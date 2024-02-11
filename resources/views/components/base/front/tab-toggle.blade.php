<div class="mb-3">
    <h1 class="bg-black text-white p-2"></h1>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link text-black-100 active" id="home-tab" data-bs-toggle="tab"
                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                aria-selected="true">Latest news</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Most
                viewed</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Random
                News</button>
        </li>
    </ul>
    <div class="tab-content mt-2" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            @foreach ($latestNews as $latest)
                <x-base.front.article-with-without-description :id="$latest->id" :desc="false" />
            @endforeach
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            @foreach ($views as $view)
                <x-base.front.article-with-without-description :id="$view->id" :desc="false" />
            @endforeach
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            @foreach ($randoms as $random)
                <x-base.front.article-with-without-description :id="$random->id" :desc="false" />
            @endforeach
        </div>
    </div>
</div>
