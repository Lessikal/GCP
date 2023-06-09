<div class='btn-group btn-group-sm'>
    @can('patients.show')
    <a data-toggle="tooltip" data-placement="left" title="{{trans('lang.view_details')}}" href="{{ route('patients.show', $id) }}" class='btn btn-link'>
        <i class="fas fa-eye"></i> </a> @endcan

    @can('patients.edit')
    <a data-toggle="tooltip" data-placement="left" title="{{trans('lang.patient_edit')}}" href="{{ route('patients.edit', $id) }}" class='btn btn-link'>
        <i class="fas fa-edit"></i> </a> @endcan

    @can('patients.destroy') {!! Form::open(['route' => ['patients.destroy', $id], 'method' => 'delete']) !!} {!! Form::button('<i class="fas fa-trash"></i>', [ 'type' => 'submit', 'class' => 'btn btn-link text-danger', 'onclick' => "return confirm('Are you sure?')" ]) !!} {!! Form::close() !!} @endcan
</div>
