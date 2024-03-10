import React from 'react'

import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';

import { Container, Row, Col } from 'react-bootstrap';
import { Link, useNavigate } from 'react-router-dom';

import '../styles/Register.css';

function Register() {
  let navigate = useNavigate();
  return (
    <div className='register'>
            <Container>
                <Row>
                    <h1 className='text-center'>REGISTER</h1>
                </Row>
                <Row>
                    <Form>
                        <Form.Group className="mb-3" controlId="formBasicNama">
                            <Form.Label>Nama Lengkap</Form.Label>
                            <Form.Control type="nama" placeholder="Masukan Nama Lengkap" />
                        </Form.Group>
                        <Form.Group className="mb-3" controlId="formBasicEmail">
                            <Form.Label>Email</Form.Label>
                            <Form.Control type="email" placeholder="Masukan Email" />
                        </Form.Group>
                        <Form.Group className="mb-3" controlId="formBasicPassword">
                            <Form.Label>Password</Form.Label>
                            <Form.Control type="password" placeholder="Masukan Password" />
                        </Form.Group>
                        <Form.Group className="mb-3" controlId="formBasicKonfirmasiPassword">
                            <Form.Label>Konfirmasi Password</Form.Label>
                            <Form.Control type="password" placeholder="Masukan Konfirmasi Password" />
                        </Form.Group>
                        <Form.Group className="mb-3" controlId="formBasicRegister">
                        <Button className ="btn-register" variant="primary" type="submit" onClick={() => navigate('/')}>
                            Register
                        </Button>
                        </Form.Group>
                        
                    </Form>
                </Row>
                <Row>
                    <div className='text-login'>
                        <hr />
                        <p>Sudah Punya Akun ? <Link to="/">Login</Link></p>
                        <hr />
                    </div>
                </Row>
            </Container>
        </div>
  )
}

export default Register