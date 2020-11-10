<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index des membres</title>
</head>
<body>
<h1>Liste des membres de l'association </h1>
<table class="table table-hover border border-secondary">
    <thead>
    <tr class="h4 bg-dark text-white">
        <th scope="col">Civilité</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Téléphone</th>
        <th scope="col">E-mail</th>
        <th scope="col"></th>
        <th scope="col">Ville</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="col">
                <p>{{$user->gender}}</p>
                {{-- @if($user->gender === 'male')
                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill text-primary"
                          fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd"
                               d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                     </svg>
                 @else
                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill text-danger"
                          fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd"
                               d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                     </svg>
                 @endif--}}
            </th>
            <th scope="col">{{$user->name}}</th>
            <th scope="col">{{$user->first_name}}</th>
            <th scope="col">{{$user->phone}}</th>
            <th scope="col">{{$user->email}}</th>
            <th scope="col"></th>
            <th scope="col">{{$user->city}}</th>
            {{--<th scope="col">
                <div class="row">
                    <a class="btn btn-sm btn-success text-white" role="button"
                       href="{{route('contact.show', $contact->id)}}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path fill-rule="evenodd"
                                  d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-secondary text-white" role="button"
                       href="{{route('contact.edit', $contact->id)}}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                            <path fill-rule="evenodd"
                                  d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                        </svg>
                    </a>
                    <form action="{{ route('contact.delete', $contact->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger text-white" role="button">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd"
                                      d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </th>--}}
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

