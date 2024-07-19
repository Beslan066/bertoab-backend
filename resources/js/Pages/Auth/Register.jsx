import { useEffect } from 'react';
import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import React from "react";
import { Head, Link, useForm } from '@inertiajs/react';
import avatarIcon from '../../../../public/img/avatar.svg';

export default function Register() {
    const [file, setFile] = React.useState(null);
    const [preview, setPreview] = React.useState(null);

    const handleFileChange = (event) => {
        const file = event.target.files[0];
        if (file) {
            setFile(file);
            const reader = new FileReader();
            reader.onloadend = () => {
                setPreview(reader.result);
            };
            reader.readAsDataURL(file);
        }
    };

    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        avatar: '',
        password: '',
        password_confirmation: '',
    });

    useEffect(() => {
        return () => {
            reset('password', 'password_confirmation');
        };
    }, []);

    const submit = (e) => {
        e.preventDefault();

        const formData = new FormData();
        formData.append('name', data.name);
        formData.append('email', data.email);
        formData.append('password', data.password);
        formData.append('password_confirmation', data.password_confirmation);
        if (file) {
            formData.append('avatar', file);
        }

        post(route('register'), {
            data: formData,
            onSuccess: () => reset(),
            forceFormData: true,
            preserveScroll: true,
        });
    };

    return (
        <GuestLayout>
            <Head title="Register" />

            <form onSubmit={submit} className={'flex flex-col justify-center items-center'} encType="multipart/form-data">
                <div className={'mb-2 register-title'}>
                    <h2>Создать аккаунт</h2>
                </div>


                <div className={'d-flex justify-center items-center w-full auth-input'}>
                    <TextInput
                        id="name"
                        name="name"
                        value={data.name}
                        className="mt-1 block w-full"
                        autoComplete="name"
                        isFocused={true}
                        onChange={(e) => setData('name', e.target.value)}
                        required
                        placeholder={'Имя и фамилия'}
                    />
                    <InputError message={errors.name} className="mt-2"/>
                </div>

                <div className="mt-4 w-full auth-input">
                    <TextInput
                        id="email"
                        type="email"
                        name="email"
                        value={data.email}
                        className="mt-1 block w-full"
                        autoComplete="username"
                        onChange={(e) => setData('email', e.target.value)}
                        required
                        placeholder={'Ваш email'}
                    />
                    <InputError message={errors.email} className="mt-2"/>
                </div>

                <div className="mt-4 w-full auth-input">
                    <TextInput
                        id="password"
                        type="password"
                        name="password"
                        value={data.password}
                        className="mt-1 block w-full"
                        autoComplete="new-password"
                        onChange={(e) => setData('password', e.target.value)}
                        required
                        placeholder={'Пароль'}
                    />
                    <InputError message={errors.password} className="mt-2"/>
                </div>

                <div className="mt-4 w-full auth-input">
                    <TextInput
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        value={data.password_confirmation}
                        className="mt-1 block w-full"
                        autoComplete="new-password"
                        onChange={(e) => setData('password_confirmation', e.target.value)}
                        required
                        placeholder={'Подтвердите пароль'}
                    />
                    <InputError message={errors.password_confirmation} className="mt-2"/>
                </div>

                <div className=" flex items-center justify-center mt-4">
                    <PrimaryButton className="ms-4" disabled={processing}>
                        Создать
                    </PrimaryButton>
                </div>

                <div className={'d-flex items-center mt-4 auth-link'}>
                    <span>Уже есть аккаунт?</span>
                    <Link
                        href={route('login')}
                        className="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Войти
                    </Link>
                </div>
            </form>
        </GuestLayout>
    );
}
