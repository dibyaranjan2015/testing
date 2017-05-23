<table>
        <tr>
            <th>No</th>
            <th>M_Name</th>
            <th>M_Email</th>
            <th>M_AccType</th>
            <th>Action</th>
        </tr>
    @foreach ($members as $member)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $member->m_name }}</td>
        <td>{{ $member->m_email }}</td>
        <td>{{ $member->m_type }}</td>
        <td>
            <a  href="">Edit</a>
            <a  href="#">Delete</a>
           
        </td>
    </tr>
    @endforeach
</table>

