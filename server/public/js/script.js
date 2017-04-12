$('#open').click(function () {
	$('.side-bar').toggle();
})
var settings = {
    progressbarWidth: '300px',
    progressbarHeight: '10px',
    progressbarColor: '#22ccff',
    progressbarBGColor: '#eeeeee',
    defaultVolume: 0.8
};
$(".player").player(settings);
$("input[type=file]").upload();


$('#anime_id').on('blur', function () {
    $.ajax({
        url: '/admin/changeAnime',
        type: 'GET',
        data: {name: $(this).val()},
        success: function (data) {
            $('.changeAnime').show()
            if (data.length === 0) {
                $('#changeAnime').append("<div class='alert bg-warning text-warning'>Нету совпадений</div>")
            }
            $.each(data, function (i, item) {
                $('#changeAnime').append("<li onclick='changeAnime(" + item.id + ")'>" + item.name + "</li>")
            })
        },
    })
})

$('#animeName').on('blur', function () {
    $.ajax({
        url: '/admin/changeAnime',
        type: 'GET',
        data: {name: $(this).val()},
        success: function (data) {
            $('.changeAnime').show()
            if (data.length === 0) {
                $('#changeAnime').append("<div class='alert bg-success text-success'>Такого аниме еще нету :)</div>")
                return true
            }
            $('#changeAnime').append("<div class='alert bg-warning text-warning'>Проверте добавляемое аниме. Есть совпадения !</div>")
            $.each(data, function (i, item) {
                $('#changeAnime').append("<li ><a href='/admin/refactore/anime/"+ item.id +"'>" + item.name + "</a></li>")
            })
        },
    })
})


$('#personName').on('blur', function () {
    $.ajax({
        url: '/admin/changePerson',
        type: 'GET',
        data: {name: $(this).val()},
        success: function (data) {
            $('.changeAnime').show()
            if (data.length === 0) {
                $('#changeAnime').append("<div class='alert bg-success text-success'>Такого героя еще нету :)</div>")
                return true
            }
            $('#changeAnime').append("<div class='alert bg-warning text-warning'>Проверте добавляемого героя. Есть совпадения !</div>")
            $.each(data, function (i, item) {
                $('#changeAnime').append("<li ><a href='/admin/update/person/"+ item.id +"'>" + item.name + "</a></li>")
            })
        },
    })
})

function changeAnime (id) {
    $('#anime_id').val(id)
    $('.changeAnime').hide()
    $('#changeAnime').html('')
}

$('#closeChange').on('click', function () {
    $('.changeAnime').hide()
    $('#changeAnime').html('')
})