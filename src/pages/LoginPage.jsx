import React from 'react'

import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';

import { Container, Row, Col } from 'react-bootstrap';
import { Link, useNavigate } from 'react-router-dom';

import '../styles/LoginPage.css';

const LoginPage = () => {
    let navigate = useNavigate();
    return (
        <div className='login'>
            <Container>
                <Row>
                    <h1 className='text-center'>LOGIN</h1>
                </Row>
                <Row>
                    <Form>
                        <Form.Group className="mb-3" controlId="formBasicEmail">
                            <Form.Label>Email</Form.Label>
                            <Form.Control type="email" placeholder="Masukan Email" />
                        </Form.Group>

                        <Form.Group className="mb-3" controlId="formBasicPassword">
                            <Form.Label>Password</Form.Label>
                            <Form.Control type="password" placeholder="Masukan Password" />
                        </Form.Group>
                        <Form.Group className="mb-3" controlId="formBasicLogin">
                        <Button className ="btn-login" variant="primary" type="submit" onClick={() => navigate('/admin/beranda')}>
                            Login
                        </Button>
                        </Form.Group>
                        
                    </Form>
                </Row>
                <Row>
                    <div className='text-register'>
                        <hr />
                        <p>Belum Punya Akun ? <Link to="/register">Register</Link></p>
                        <hr />
                    </div>
                </Row>
            </Container>
        </div>
    )
}

export default LoginPage