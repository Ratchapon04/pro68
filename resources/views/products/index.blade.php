<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <title>รายการรองเท้า</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 20px;
      background: #fafafa;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      background: white;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px 12px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
    tr:nth-child(even) { background-color: #f9f9f9; }
  </style>
</head>
<body>
  <h1>📦 รายการรองเท้าในระบบ</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>ชื่อรุ่น</th>
        <th>แบรนด์</th>
        <th>ไซซ์</th>
        <th>ราคา (บาท)</th>
        <th>คงเหลือ</th>
        <th>รายละเอียด</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($items as $p)
        <tr>
          <td>{{ $p->id }}</td>
          <td>{{ $p->name }}</td>
          <td>{{ $p->brand }}</td>
          <td>{{ $p->size }}</td>
          <td>{{ number_format($p->price, 2) }}</td>
          <td>{{ $p->stock }}</td>
          <td>{{ $p->description }}</td>
        </tr>
      @empty
        <tr>
          <td colspan="7" style="text-align:center; color:gray;">ไม่มีข้อมูลสินค้า</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</body>
</html>
