<nav id="sidebar">
    <div class="p-4 pt-5">
        <a href="{{ route('instructor.index') }}" class="btn text-white"><h5><i class="fas fa-arrow-left mr-3"></i>Retour aux cours</h5></a>
        <hr>
        <h4 class="btn text-white pl-0">Modification du cours</h4>
        <ul class="list-unstyled components mb-5">
            <li>
                <a href="{{ route('curriculum.index', $course->id) }}">Programme</a>
            </li>
            <li>
                <a href="{{ route('instructor.courses.edit', $course->id) }}">Page d'accueil du cours</a>
            </li>
        </ul>
        
        <h4 class="btn text-white pl-0">Gestion du cours</h4>
        <ul class="list-unstyled components mb-5">
            <li>
                <a href="{{ route('instructor.courses.pricing', $course->id) }}">Tarification</a>
            </li>
            <li>
            <a href="{{ route('instructor.courses.participants', $course->id) }}">Participants</a>
            </li>
        </ul>
        @if(!$course->is_published)
        <div class="d-flex justify-content-around">
            <a class="primary-btn" href="{{ route('instructor.courses.publish', $course->id) }}">
                <i class="fas fa-check"></i>
                Mettre en ligne
            </a>
        </div>
        @else 
        <p class="alert alert-success">
            <i class="fas fa-check"></i>
            Votre cours est en ligne
        </p>
        @endif
    </div>
</nav>
