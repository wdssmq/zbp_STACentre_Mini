$(function() {
  const map = {
    ZC_ARTICLE_REGEX: "{%host%}post/{%alias%}.html",
    ZC_PAGE_REGEX: "{%host%}{%alias%}.html",
    ZC_INDEX_REGEX: "{%host%}page/{%page%}/",
    ZC_CATEGORY_REGEX: "{%host%}category/{%alias%}/{%page%}/",
    ZC_TAGS_REGEX: "{%host%}tag/{%alias%}/{%page%}/",
    ZC_DATE_REGEX: "{%host%}date/{%date%}/{%page%}/",
    ZC_AUTHOR_REGEX: "{%host%}author/{%alias%}/{%page%}/",
  };
  $("a[href$='list.php']").after(
    "<a class=\"js-run\" title=\"一键设置\" href=\"javascript:;\"><span class=\"m-left\">一键设置</span></a>",
  );
  $(".js-run").click(function() {
    $(":radio[name=\"ZC_STATIC_MODE\"]").eq(1).click();
    // changeOptions(2);
    fnHideEl();
    for (const el in map) {
      $(`#${el}`).val(map[el]);
      // console.log(el, map[el]);
    }
  });
  function fnHideEl() {
    $("#edit table tr").each(function() {
      const elRadio = $(this).find("td input[type='radio']");
      if (elRadio.length > 0) {
        $(this).hide();
      }
    });
  }
});
