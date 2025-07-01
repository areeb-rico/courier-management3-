<!-- Custom Table Styles -->
<style>
    *{
        background-color: #F0F9FF;
      margin-top: 10px;
    }
    .custom-salary-container {
        padding: 1px;
        background-color:black;
    }
#012B3C
    .custom-salary-box {
        background: #F0F9FF;
        border-radius: 12px;
        padding: 25px;
        
        text-align: center;
    }

    .custom-salary-box h6 {
        font-size: 1.3rem;
        font-weight: 600;
        color: #333;
    }

    .custom-table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    .custom-table th,
    .custom-table td {
        border: 1px solid #dee2e6;
        padding: 10px 12px;
        text-align: center;
    }

    .custom-table th {
        background-color: black;
        color: white;
        font-weight: 600;
    }

    .custom-table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .custom-btn-success {
        background-color: #28a745;
        color: white;
        padding: 6px 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .custom-btn-success:hover {
        background-color: #218838;
    }

    .back-btn {
        background-color: red;
        color: white;
        padding: 6px 14px;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        margin-bottom: 15px;
    }

    .back-btn:hover {
        background-color: #5a6268;
    }

    .custom-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }
</style>

<!-- Parcel Table with Back Button -->
<div class="container-fluid custom-salary-container">
    <div class="custom-salary-box">
        <div class="custom-header">
            <h6>View All Parcels</h6>
            <button class="back-btn" onclick="history.back()">← Back</button>
        </div>
        <div class="table-responsive">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Parcel Name</th>
                        <th>Parcel Tracking Code</th>
                        <th>Sender</th>
                        <th>Receiver Location</th>
                        <th>Receiver</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($parcels as $r)
                    <tr>
                        <td>{{ $r->id }}</td>
                        <td>{{ $r->ParcelName }}</td>
                        <td>{{ $r->ParcelCode }}</td>
                        <td>{{ $r->SentByName }}</td>
                        <td>{{ $r->SentToLocation }}</td>
                        <td>{{ $r->SentToName }}</td>
                        <td>
                            <button class="custom-btn-success">View More Details</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>