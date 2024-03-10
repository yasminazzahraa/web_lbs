import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import LoginPage from './pages/LoginPage';
import Register from './pages/Register';
import BerandaAdminPage from './pages/admin/BerandaAdminPage';
import DataKurirAdminPage from './pages/admin/DataKurirAdminPage';
import DataPelangganAdminPage from './pages/admin/DataPelangganAdminPage';
import LaporanPengirimanAdminPage from './pages/admin/LaporanPengirimanAdminPage';
import PengirimanAdminPage from './pages/admin/PengirimanAdminPage';
import ProdukLayananAdminPage from './pages/admin/ProdukLayananAdminPage';

import BerandaUserPage from './pages/user/BerandaUserPage';
import DetailPaketUserPage from './pages/user/DetailPaketUserPage';
import DetailPenerimaUserPage from './pages/user/DetailPenerimaUserPage';
import DetailPengirimUserPage from './pages/user/DetailPengirimUserPage';
import HalamanAlamatUserPage from './pages/user/HalamanAlamatUserPage';
import PengirimanSayaUserPage from './pages/user/PengirimanSayaUserPage';
import ProfilUserPage from './pages/user/ProfilUserPage';
import RekapPaketUserPage from './pages/user/RekapPaketUserPage';

function App() {

  return (
    <div>
      <Router>
        <Routes>
          <Route path="/" element={<LoginPage />} />
          <Route path="/register" element={<Register />} />
          <Route path="/admin/beranda" element={<BerandaAdminPage />} />
          <Route path="/admin/data-kurir" element={<DataKurirAdminPage />} />
          <Route path="/admin/data-pelanggan" element={<DataPelangganAdminPage />} />
          <Route path="/admin/laporan-pengiriman" element={<LaporanPengirimanAdminPage />} />
          <Route path="/admin/pengiriman" element={<PengirimanAdminPage />} />
          <Route path="/admin/produk-layanan" element={<ProdukLayananAdminPage />} />
          <Route path="/user/beranda" element={<BerandaUserPage />} />
          <Route path="/user/detail-paket" element={<DetailPaketUserPage />} />
          <Route path="/user/detail-penerima" element={<DetailPenerimaUserPage />} />
          <Route path="/user/detail-pengirim" element={<DetailPengirimUserPage />} />
          <Route path="/user/halaman-alamat" element={<HalamanAlamatUserPage />} />
          <Route path="/user/pengiriman-saya" element={<PengirimanSayaUserPage />} />
          <Route path="/user/profil" element={<ProfilUserPage />} />
          <Route path="/user/rekap-paket" element={<RekapPaketUserPage />} />




        </Routes>
      </Router>
    </div>
  )
}

export default App
