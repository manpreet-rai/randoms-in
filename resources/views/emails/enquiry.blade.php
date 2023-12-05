<html>
<body>
<div style="background-color: #F2F2F2; color: #363636; padding: 2rem; text-align: center; font-family: Arial, Helvetica, sans-serif;">
    <div>
        <img src="https://randoms.in/assets/logo.png" alt="Logo" title="Logo" style="display:inline" width="32" height="32" style="margin-top: 32px; margin-bottom: 8px;"/>
        <p style="font-weight: bold; color: #9E12B4;">Randoms IN - New Quotation</p>
    </div>

    <div style="width:90%; background-color: #FFFFFF; margin:auto; border-radius: 0.5rem; padding: 1rem; margin-top: 32px;">
        <table style="border-collapse: separate; border-spacing: 0 0.5rem; width: 100%; text-align:center;">
            <tr>
                <td>Name</td>
                <th>{{ $details['name'] }}</th>
            </tr>
            <tr>
                <td>Email</td>
                <th>{{ $details['email'] }}</th>
            </tr>
            <tr>
                <td>Project Type</td>
                <th>{{ $details['projectType'] }}</th>
            </tr>
            <tr>
                <td>Budget</td>
                <th>{{ $details['budget'] }}</th>
            </tr>
            <tr>
                <td>Phone</td>
                <th>{{ $details['phone'] }}</th>
            </tr>
            <tr>
                <td>Country</td>
                <th>{{ $details['country'] }}</th>
            </tr>
            <tr>
                <td>Details</td>
                <th>{{ $details['details'] }}</th>
            </tr>
        </table>
    </div>

    <p style="margin-top: 32px; font-size: 0.8rem;">Made with <span style="color: #9E12B4;">♥</span> and © by randoms</p>
</div>
</body>
</html>
