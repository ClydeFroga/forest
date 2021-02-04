jQuery(function($){
    let cat = new Map();
    let slugs = [];
    let operator = 'IN';

    $(".filter__all span").click(function () {
        if(document.querySelector('body').classList.contains('loading')) return;

        let slug = this.id
        let thisBut = document.querySelector(`#${slug}`)
        let name = this.attributes.data.value
        slugs = [];

        if(thisBut.classList.contains('added')) {
            cat.delete(name);
        }
        else {
            cat.set(name, this.id)
        }

        thisBut.classList.toggle('added')
        cat.size === 0 ? operator ='EXISTS' : operator = 'IN';

        makeArray()

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
            category: isCategory
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
                $("body").removeClass("loading")
            },
        });
    }

    $(".filter > .h2Title").click(function () {

        let block = document.querySelector('.filter__hide')
        let height = block.scrollHeight;

        if(!this.classList.contains('closed')) {
            block.style.height = `${height + 10}px`
        } else {
            block.style.height = `0`
        }
        this.classList.toggle('closed')

    });

});