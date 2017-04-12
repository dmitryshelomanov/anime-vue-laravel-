<div class="side-bar">
    <ul>
        <li>
            <i class="fa fa-home fw"></i>
            <span>
                <a href="{{ route('home') }}">Главная</a>
            </span>
        </li>
        <li>
            <i class="fa fa-desktop fw"></i>
            <span>
                <a href="{{ route('addAnime') }}">Добавление видео</a>
            </span>
        </li>
        <li>
            <i class="fa fa-user fw"></i>
            <span>
                <a href="/admin/add/person">Добавление героя</a>
            </span>
        </li>
        <li>
            <i class="fa fa-users fw"></i>
            <span>
                <a href="{{ route('users') }}">Пользователи</a>
            </span>
        </li>
        <li>
            <i class="fa fa-newspaper-o fw"></i>
            <span>
                <a href="{{ route('newsPage') }}">Добавить новость</a>
            </span>
        </li>
    </ul>
</div>