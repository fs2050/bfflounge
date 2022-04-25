
<!-- Container_center-->
<div class="container_center h-100">


                <livewire:home.form-search>

                      <livewire:home.create-post>

                <livewire:home.show-post>


</div>
<!-- End Container_center-->



<div class="container_right h-100">
    @include('livewire.components.profiles.home-suggestions')
</div>

@include('livewire.components.posts.send-tip-dialog')
@include('livewire.components.posts.select-card-dialog')
