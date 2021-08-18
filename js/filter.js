jQuery(function ($) {

    let allIds = document.querySelectorAll('.filter__all span')
    let cancel = document.querySelector('.filter__cancel')
  let cat = new Map();
  let slugs = [];

  for (let item of allIds) {
      cat.set(item.attributes.data.value,item.id)
  }

  let operator = "EXISTS";

  $(".filter__all span").click(function () {
    if (document.querySelector("body").classList.contains("loading")) return;

    let slug = this.id;
    let thisBut = document.querySelector(`#${slug}`);
    let name = this.attributes.data.value;
    slugs = [];

    if (thisBut.classList.contains("added")) {
      cat.delete(name);
    } else {
      cat.set(name, this.id);
    }

    thisBut.classList.toggle("added");

    if(cat.size === 0) {
      operator = "EXISTS"
      cancel.innerText = 'выделить всё'
      cancel.id = ''
    } else {
      operator = "IN"
      cancel.innerText = 'снять выделение'
      cancel.id = 'full'
    }

    makeArray();

    function makeArray() {
      for (let one of cat.values()) {
        slugs.push(one);
      }
    }
  });

  $(".filter__display").click(function () {
    current_page = 1;
    loadData();
  });

  function loadData() {
    let data = {
      currentTheme: theme,
      slug: slugs,
      operator: operator,
      action: "filterLoad",
      category: isCategory,
    };

    $.ajax({
      url: filterAjaxUrl,
      data: data,
      type: "POST",
      beforeSend: function () {
        $("body").addClass("loading");
      },
      success: function (data) {
        if (data) {
          $(".horizontalBar1").remove();
          $(".horizontalBar2").remove();
          $(".horizontalBar3").remove();
          $(".horizontalBar4").remove();
          $(".rubric").append(data);
        }
      },
      complete: function () {
        $("body").removeClass("loading");
      },
    });
  }

  $(".filter > .h2Title").click(function () {
    let block = document.querySelector(".filter__hide");
    let height = block.scrollHeight;

    if (!this.classList.contains("closed")) {
      block.style.height = `${height + 10}px`;
    } else {
      block.style.height = `0`;
    }
    this.classList.toggle("closed");
  });

  cancel.addEventListener('click', function () {
    cat.clear()
    if(this.id === 'full') {
      for (let item of allIds) {
        item.classList.remove('added')
      }
      this.id = ''
      this.innerText = 'выделить всё'
    } else {
      for (let item of allIds) {
        item.classList.add('added')
      }
      this.id = 'full'
      this.innerText = 'снять выделение'
    }
    operator = "EXISTS"
    slugs = []
  })
});