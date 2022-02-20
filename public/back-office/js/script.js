jQuery(document).ready(function () {
    jQuery('.add-another-collection').click(function (e) {
        var list = $("#diplomes-fields-list");
        var counter = list.data('widget-counter') | list.children().length;
        var newWidget = list.attr('data-prototype');
        newWidget = newWidget.replace(/__name__/g, counter);
        counter++;
        list.data('widget-counter', counter);

        var newElem = jQuery(list.attr('data-widget-tags')).html(newWidget);
        newElem.appendTo(list);
        newElem.append('<a href="#" class="remove-tag" style="color: darkred">remove</a>');
        $('.remove-tag').click(function(e) {
            e.preventDefault();

            $(this).parent().remove();

        });
    });
});