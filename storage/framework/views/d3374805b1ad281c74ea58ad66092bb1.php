<script type="text/javascript">
    $(document).ready(function ($) {
    $('#country_id').on('change', function (e) {
    e.preventDefault();
    filterStates(0);
    });
    $(document).on('change', '#state_id', function (e) {
    e.preventDefault();
    filterCities(0);
    });
    <?php
            $state_id_array = Request::get('state_id', array(0 => 0));
    ?>
            filterStates(<?php echo e($state_id_array[0]); ?>);
    });
    function filterStates(state_id)
    {
    var country_id = $('#country_id').val();
    if (country_id != ''){
    $.post("<?php echo e(route('filter.states.dropdown')); ?>", {country_id: country_id, state_id: state_id, _method: 'POST', _token: '<?php echo e(csrf_token()); ?>'})
            .done(function (response) {
            $('#state_dd').html(response);
            <?php
                    $city_id_array = Request::get('city_id', array(0 => 0));
            ?>
                    filterCities(<?php echo e($city_id_array[0]); ?>);
            });
    }
    }
    function filterCities(city_id)
    {
    var state_id = $('#state_id').val();
    if (state_id != ''){
    $.post("<?php echo e(route('filter.cities.dropdown')); ?>", {state_id: state_id, city_id: city_id, _method: 'POST', _token: '<?php echo e(csrf_token()); ?>'})
            .done(function (response) {
            $('#city_dd').html(response);
            });
    }
    }
</script><?php /**PATH E:\xampp\htdocs\dev\jobsportal\resources\views/includes/country_state_city_js.blade.php ENDPATH**/ ?>