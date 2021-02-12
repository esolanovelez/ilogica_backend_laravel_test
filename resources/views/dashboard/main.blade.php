<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#information_general" role="tab" aria-controls="home" aria-selected="true">{{ __('INFORMATION GENERAL') }}</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#contacts" role="tab" aria-controls="profile" aria-selected="false">{{ __('CONTACTS') }}</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="information_general" role="tabpanel" aria-labelledby="information_general-tab">
        @include('dashboard.information_general')
    </div>
    <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="profile-tab">
        @include('dashboard.contacts')
    </div>
</div>