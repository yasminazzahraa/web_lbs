import React from 'react'
import berandaIcon from '../assets/icons/beranda.svg'
import datapengirimanIcon from '../assets/icons/datapengiriman.svg'
import laporanIcon from '../assets/icons/laporan.svg'
import userIcon from '../assets/icons/user.svg'
import logoutIcon from '../assets/icons/logout.svg'

import { Container, Row, Col, Button, Dropdown, DropdownButton } from 'react-bootstrap'
import { useNavigate } from 'react-router-dom'

import '../styles/SidebarAdminComponent.css'

const SidebarAdminComponent = () => {

    let navigate = useNavigate();
    return (
        <div className='sidebar'>
            <Container >
                <Row className='logo-sidebar'>
                    <h2>Delivery</h2>
                </Row>
                <Row>
                    <Row className='menu-sidebar'>
                        <Button className='btn-menu' variant='primary' onClick={() => navigate('/admin/beranda')}>
                            <img src={berandaIcon} alt="beranda" />
                            <h5>Beranda</h5>
                        </Button>

                    </Row>
                    <Row className='menu-sidebar'>
                        <Button className='btn-menu' variant='primary' onClick={() => navigate('/admin/pengiriman')}>
                            <img src={datapengirimanIcon} alt="datapengiriman" />
                            <h5>Data Pengiriman</h5>
                        </Button>

                    </Row>
                    <Row className='menu-sidebar'>

                        <Button className='btn-menu' variant='primary' onClick={() => navigate('/admin/laporan-pengiriman')}>
                            <img src={laporanIcon} alt="laporan" />
                            <h5>Laporan</h5>
                        </Button>

                    </Row>
                    <Row className='menu-sidebar'>
                        {/* <Button className='btn-menu' variant='primary' onClick={() => navigate('/admin/pengiriman')}>

                        </Button> */}

                        <DropdownButton className='btn-menu-drop' id='dropdown-basic-button' title={<div className='click-drop' style={{display: 'flex', justifyContent: 'space-between', backgroundColor: 'antiquewhite'
    ,border :'none'}}>
                            <img src={userIcon} alt="user" />
                            <h5>User</h5>
                        </div>}>
                            <Dropdown.Item onClick={() => navigate('/admin/pengiriman')}>
                                Data Kurir
                            </Dropdown.Item>
                            <Dropdown.Item onClick={() => navigate('/admin/pengiriman')}>
                                Data Admin
                            </Dropdown.Item>

                        </DropdownButton>

                    </Row>
                    <Row className='menu-sidebar'>
                        <Button className='btn-menu' variant='primary' onClick={() => navigate('/')}>
                            <img src={logoutIcon} alt="logout" />
                            <h5>Logout</h5>
                        </Button>

                    </Row>
                </Row>
            </Container>
        </div>
    )
}

export default SidebarAdminComponent