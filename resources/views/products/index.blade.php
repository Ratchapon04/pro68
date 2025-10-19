<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>รายการรองเท้า</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      padding: 40px 20px;
      position: relative;
      overflow-x: hidden;
    }

    body::before {
      content: '';
      position: fixed;
      width: 500px;
      height: 500px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      top: -250px;
      right: -250px;
      animation: float 20s infinite ease-in-out;
    }

    body::after {
      content: '';
      position: fixed;
      width: 400px;
      height: 400px;
      background: rgba(255, 255, 255, 0.08);
      border-radius: 50%;
      bottom: -200px;
      left: -200px;
      animation: float 15s infinite ease-in-out reverse;
    }

    @keyframes float {
      0%, 100% { transform: translate(0, 0) scale(1); }
      33% { transform: translate(30px, -30px) scale(1.1); }
      66% { transform: translate(-20px, 20px) scale(0.9); }
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }

    .header {
      text-align: center;
      margin-bottom: 50px;
      animation: slideDown 0.8s ease;
    }

    .logo {
      display: inline-flex;
      align-items: center;
      gap: 15px;
      margin-bottom: 15px;
    }

    .logo-icon {
      width: 60px;
      height: 60px;
      background: white;
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2em;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      animation: bounce 2s infinite;
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    h1 {
      font-size: 3em;
      color: white;
      font-weight: 700;
      text-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .subtitle {
      color: rgba(255, 255, 255, 0.9);
      font-size: 1.1em;
      font-weight: 300;
    }

    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .table-wrapper {
      background: white;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
      animation: fadeIn 0.8s ease;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    thead {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
    }

    th {
      padding: 20px 15px;
      text-align: left;
      font-weight: 600;
      font-size: 0.95em;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }

    td {
      padding: 18px 15px;
      border-bottom: 1px solid #f0f0f0;
      color: #333;
      font-size: 0.95em;
    }

    tbody tr {
      transition: all 0.3s ease;
    }

    tbody tr:hover {
      background: linear-gradient(90deg, #f8f9ff 0%, #fff 100%);
      transform: scale(1.01);
      box-shadow: 0 5px 15px rgba(102, 126, 234, 0.1);
    }

    tbody tr:last-child td {
      border-bottom: none;
    }

    .price {
      color: #667eea;
      font-weight: 700;
      font-size: 1.1em;
    }

    .stock {
      display: inline-block;
      padding: 6px 12px;
      background: #10b981;
      color: white;
      border-radius: 20px;
      font-size: 0.9em;
      font-weight: 600;
    }

    .stock.low {
      background: #ef4444;
    }

    .stock.medium {
      background: #f59e0b;
    }

    .brand-badge {
      display: inline-block;
      padding: 5px 10px;
      background: #f3f4f6;
      border-radius: 8px;
      font-weight: 500;
      color: #4b5563;
    }

    .empty-state {
      text-align: center;
      padding: 60px 20px;
      color: #9ca3af;
      font-size: 1.1em;
    }

    .empty-state::before {
      content: "👟";
      display: block;
      font-size: 4em;
      margin-bottom: 20px;
      opacity: 0.3;
    }

    .shoe-name {
      font-weight: 600;
      color: #1f2937;
    }

    .size-badge {
      display: inline-block;
      padding: 4px 8px;
      background: #e0e7ff;
      color: #4338ca;
      border-radius: 6px;
      font-size: 0.9em;
      font-weight: 600;
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 2em;
      }

      table {
        font-size: 0.85em;
      }

      th, td {
        padding: 12px 10px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="logo">
        <div class="logo-icon">👟</div>
      </div>
      <h1>ร้านรองเท้าของเรา</h1>
      <p class="subtitle">รองเท้าคุณภาพ ราคาดี</p>
    </div>

    <div class="table-wrapper">
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
              <td><span class="shoe-name">{{ $p->name }}</span></td>
              <td><span class="brand-badge">{{ $p->brand }}</span></td>
              <td><span class="size-badge">{{ $p->size }}</span></td>
              <td class="price">฿{{ number_format($p->price, 2) }}</td>
              <td><span class="stock {{ $p->stock <= 5 ? 'low' : ($p->stock <= 10 ? 'medium' : '') }}">{{ $p->stock }} คู่</span></td>
              <td>{{ $p->description }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="7">
                <div class="empty-state">ไม่มีข้อมูลสินค้า</div>
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
