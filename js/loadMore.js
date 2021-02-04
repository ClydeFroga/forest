function loadMoreOnNews() {
  jQuery(function ($) {
    let news = [];
    let titles = document.querySelectorAll(".titleScroll");
    let currentTitle = titles[0].textContent;
    let additionalBlock = document.querySelector(".single__mainContent.article-loaded");

    function scrollWatch() {
      let block = document
          .querySelector(".single__mainContent.article-loaded")
          .getBoundingClientRect().bottom;

      let data = { action: "singleLoad", offset: offset, currID: exclude };

      if (block < 1000 && !$("body").hasClass("loading")) {
        $.ajax({
          url: ajaxurl_single,
          data: data,
          type: "POST",
          beforeSend: function () {
            $("body").addClass("loading");
          },
          success: function (data) {
            if (data) {
              $(".single__mainContent.article-loaded").append(data);
              offset++;
              news = document.querySelectorAll(".article-loaded");
              titles = document.querySelectorAll(".titleScroll");
            }
          },
          complete: function () {
            setTimeout(() => $("body").removeClass("loading"), 2000);
            currentTitle = titles[titles.length - 1].textContent;
            window.history.pushState(
                { page_title: titles[titles.length - 1].textContent },
                "",
                urls[urls.length - 1]
            );
          },
        });
      }
      if (additionalBlock.getBoundingClientRect().top < 0) {
        for (let i = news.length - 1; i > -1; i--) {
          if (news[i].getBoundingClientRect().top > 0) {
            continue;
          } else {
            let art = titles[i].textContent;
            document.title = art;
            if (art !== currentTitle) {
              window.history.replaceState(
                  { page_title: titles[i].textContent },
                  "",
                  urls[i]
              );
              currentTitle = titles[i].textContent;
            }
            return;
          }
        }
      } else {
        let art = titles[0].textContent;
        document.title = art;
        if (art !== currentTitle) {
          window.history.replaceState(
              { page_title: title.textContent },
              "",
              urls[0]
          );
          currentTitle = titles[0].textContent;
        }
      }
    }

    window.addEventListener('scroll', scrollWatch)

  });
}
