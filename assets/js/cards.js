jQuery(".contact-info div strong").text(function() {
  jQuery(this).replaceWith(
    '<a href="tel:1' + $(this).text().replace(/-/g, '').replace(/ /g, '').replace(/\./g, '').replace(/x/g, ',') + '">' + jQuery(this).text() + "</a>"
  );
});
