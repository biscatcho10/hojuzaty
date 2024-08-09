<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-4">
            @lang('inquiries::inquiries.latest')
        </h4>

        <div class="table-responsive">
            <table class="table table-centered">
                <thead>
                    <tr>
                        <th>@lang('inquiries::inquiries.attributes.name')</th>
                        <th>@lang('inquiries::inquiries.attributes.destination_id')</th>
                        <th>@lang('inquiries::inquiries.attributes.email')</th>
                        <th>@lang('inquiries::inquiries.attributes.phone')</th>
                        <th>@lang('inquiries::inquiries.attributes.check_in')</th>
                        <th>@lang('inquiries::inquiries.attributes.check_out')</th>
                        <th>@lang('inquiries::inquiries.attributes.created_at')</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($inquiries as $inquiry)
                        <tr>
                            <td class="d-none d-md-table-cell">
                                {{ $inquiry->name }}
                            </td>
                            <td class="d-none d-md-table-cell">
                                <a href="{{ route('dashboard.destinations.show', $inquiry->destination) }}"
                                    target="_blank">{{ $inquiry->destination->name }}</a>
                            </td>
                            <td class="d-none d-md-table-cell">
                                {{ $inquiry->email }}
                            </td>
                            <td class="d-none d-md-table-cell">
                                {{ $inquiry->phone }}
                            </td>
                            <td class="d-none d-md-table-cell">
                                {{ $inquiry->check_in }}
                            </td>
                            <td class="d-none d-md-table-cell">
                                {{ $inquiry->check_out }}
                            </td>
                            <td>{{ date('Y/m/d', strtotime($inquiry->created_at)) }}</td>
                            <td><a href="{{ route('dashboard.inquiries.show', $inquiry) }}"
                                    class="btn btn-primary btn-sm">@lang('View')</a></td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            <ul class="pagination pagination-rounded justify-content-center mb-0">
                {{ $inquiries->links() }}
            </ul>
        </div>
    </div>
</div>
