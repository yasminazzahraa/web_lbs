import React from 'react'
import HeaderAdminComponent from '../../components/HeaderAdminComponent'
import SidebarAdminComponent from '../../components/SidebarAdminComponent'

function BerandaAdminPage() {
  return (
    <div>
      <HeaderAdminComponent judulPage= "Beranda Admin" namaAdmin= "Abdul" urlFoto= "../src/assets/foto1.jpeg"/>
      <SidebarAdminComponent/>
    </div>
  )
}

export default BerandaAdminPage