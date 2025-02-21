
<div class="sidebar">
    <div class="sidebar-header">
        <div class="text-center">Manage finance 1.0</div>
    </div>
    <div class="sidebar-body">
        {{-- menu --}}
        <div class="menu">
            <ul>
                <li wire:click="changeMenu('dashboard')" @if ($currentMenu == 'dashboard') class="active" @endif>
                        <i class="fa-solid fa-chart-line me-2"></i>Dashboard
                </li>
                <li wire:click="changeMenu('expense/index')" @if ($currentMenu == 'expense/index') class="active" @endif>
                    <i class="fa-regular fa-floppy-disk me-2"></i>บันทึกรายรับ
                </li>
                <li wire:click="changeMenu('expense2/index')" @if ($currentMenu == 'expense2/index') class="active" @endif>
                    <i class="fa-regular fa-floppy-disk me-2"></i>บันทึกรายจ่าย
                </li>
                <li wire:click="changeMenu('user/index')" @if ($currentMenu == 'user/index') class="active" @endif>
                    <i class="fa-regular fa-user me-2"></i>ผู้ใช้งาน
                </li>
                <li  wire:click="changeMenu('company')" @if ($currentMenu == 'company') class="active" @endif>
                        <i class="fa-solid fa-earth-africa me-2"></i>ข้อมูลทั่วไป
                </li>
            </ul>
        </div>
    </div>
</div>
