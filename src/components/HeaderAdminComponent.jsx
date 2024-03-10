import React from 'react'

import { Container, Row, Col } from 'react-bootstrap'
import '../styles/HeaderAdmin.css'

const HeaderAdminComponent = ({judulPage, namaAdmin, urlFoto}) => {
  return (
    <div className='header'>
        <Container className='baris-header'>
                <div>
                    <h3>{judulPage}</h3>
                </div>
                <div className='detail-akun'>
                    <h5 className='mx-3 pt-1'>{namaAdmin}</h5>
                    <img src={urlFoto} alt="pic admin" />
                </div>
        </Container>
    </div>
  )
}

export default HeaderAdminComponent