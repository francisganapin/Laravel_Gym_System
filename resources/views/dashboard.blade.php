<h1>Dashboard</h1>

<div style="display:flex; gap:20px; flex-wrap:wrap;">
    <div style="padding:20px; background:#d1fae5; border-radius:8px;">
        <h3>Total Members</h3>
        <p>{{ $total }}</p>
    </div>

    <div style="padding:20px; background:#bfdbfe; border-radius:8px;">
        <h3>Standard</h3>
        <p>{{ $standard }}</p>
    </div>

    <div style="padding:20px; background:#fde68a; border-radius:8px;">
        <h3>Premium</h3>
        <p>{{ $vip }}</p>
    </div>

    <div style="padding:20px; background:#fecaca; border-radius:8px;">
        <h3>Vip</h3>
        <p>{{ $premium }}</p>
    </div>

    <div style="padding:20px; background:#fca5a5; border-radius:8px;">
        <h3>Expired Members</h3>
        <p>{{ $expired }}</p>
    </div>
</div>

