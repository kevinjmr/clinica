PGDMP     %    7                w           clinica    10.7    10.7 4    N           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            O           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            P           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            Q           1262    16501    clinica    DATABASE     �   CREATE DATABASE clinica WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Mexico.1252' LC_CTYPE = 'Spanish_Mexico.1252';
    DROP DATABASE clinica;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            R           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12924    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            S           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    16502    administracion    TABLE     �   CREATE TABLE public.administracion (
    "Nombre" character(20),
    "APaterno" character(20),
    "AMaterno" character(20),
    "Telefono" numeric(20,0),
    "Direccion" text,
    pass character(16),
    "RFC" character(20) NOT NULL
);
 "   DROP TABLE public.administracion;
       public         postgres    false    3            �            1259    16585    cita_seq    SEQUENCE     q   CREATE SEQUENCE public.cita_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
    DROP SEQUENCE public.cita_seq;
       public       postgres    false    3            �            1259    16508    cita    TABLE     �   CREATE TABLE public.cita (
    "Id" numeric DEFAULT nextval('public.cita_seq'::regclass) NOT NULL,
    "CURP_paciente" character(20),
    ced_prof_medico character(20),
    fecha date,
    descripcion text,
    hora text
);
    DROP TABLE public.cita;
       public         postgres    false    206    3            �            1259    16582    consultorio_seq    SEQUENCE     x   CREATE SEQUENCE public.consultorio_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.consultorio_seq;
       public       postgres    false    3            �            1259    16514    consultorio    TABLE     �   CREATE TABLE public.consultorio (
    "Id" numeric DEFAULT nextval('public.consultorio_seq'::regclass) NOT NULL,
    "Medico" character(20),
    "Secretaria" character(20)
);
    DROP TABLE public.consultorio;
       public         postgres    false    205    3            �            1259    16618    estudio_seq    SEQUENCE     t   CREATE SEQUENCE public.estudio_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.estudio_seq;
       public       postgres    false    3            �            1259    16520    estudio    TABLE     �   CREATE TABLE public.estudio (
    "Id" numeric DEFAULT nextval('public.estudio_seq'::regclass) NOT NULL,
    "CURP_paciente" character(20),
    descripcion text
);
    DROP TABLE public.estudio;
       public         postgres    false    209    3            �            1259    16588    historial_seq    SEQUENCE     v   CREATE SEQUENCE public.historial_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.historial_seq;
       public       postgres    false    3            �            1259    16526 	   historial    TABLE       CREATE TABLE public.historial (
    "Id" numeric DEFAULT nextval('public.historial_seq'::regclass) NOT NULL,
    "Ced_prof_medico" character(20),
    "Fecha" date,
    "AP_No_P" text,
    "APP" text,
    "AHF" text,
    "AGO" text,
    "Menarca" text,
    "Ritmo" numeric DEFAULT 0,
    "IVSA" text,
    "Cesarea" text,
    "FUM" text,
    "FPP" text,
    "DIU" text,
    "Hormonales" text,
    "Docma" text,
    "Papamicolau" text,
    "Padecimiento_actual" text,
    "T/A" text,
    "FC" text,
    "FR" text,
    "Temperatura" numeric DEFAULT 0,
    "Peso" numeric DEFAULT 0,
    "Talla" numeric DEFAULT 0,
    "Cabeza" text,
    "Torax" text,
    "Abdomen" text,
    "Extremidades" text,
    "Genitales" text,
    "Vascula_Perifericos" text,
    "CURP_paciente" text
);
    DROP TABLE public.historial;
       public         postgres    false    207    3            �            1259    16532    medico    TABLE       CREATE TABLE public.medico (
    "Ced_prof" character(20) NOT NULL,
    "Nombre" character(20),
    "APaterno" character(20),
    "AMaterno" character(20),
    "Telefono" numeric(20,0),
    "Direccion" text,
    "Especialidad" text,
    "Escuela" text,
    pass character(16)
);
    DROP TABLE public.medico;
       public         postgres    false    3            �            1259    16538    paciente    TABLE     |  CREATE TABLE public.paciente (
    "CURP" character(20) NOT NULL,
    "Nombre" character(20),
    "APaterno" character(20),
    "AMaterno" character(20),
    "Telefono" character(20),
    "Direccion" text,
    "Edad" numeric,
    "Edo_civil" text,
    "Ocupacion" text,
    "Escolaridad" text,
    "Lugar_de_origen" text,
    "Lugar_de_residencia" text,
    pass character(20)
);
    DROP TABLE public.paciente;
       public         postgres    false    3            �            1259    16615 
   receta_seq    SEQUENCE     s   CREATE SEQUENCE public.receta_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 !   DROP SEQUENCE public.receta_seq;
       public       postgres    false    3            �            1259    16544    receta    TABLE     �   CREATE TABLE public.receta (
    "Id" numeric DEFAULT nextval('public.receta_seq'::regclass),
    "CURP_paciente" character(20),
    fecha date DEFAULT now(),
    descripcion text,
    ced_prof_medico character(20)
);
    DROP TABLE public.receta;
       public         postgres    false    208    3            �            1259    16550 
   secretaria    TABLE       CREATE TABLE public.secretaria (
    "RFC" character(13) NOT NULL,
    "Nombre" character(20) NOT NULL,
    "APaterno" character(20) NOT NULL,
    "AMaterno" character(20) NOT NULL,
    "Telefono" numeric(20,0),
    "Direccion" text,
    pass character(16)
);
    DROP TABLE public.secretaria;
       public         postgres    false    3            >          0    16502    administracion 
   TABLE DATA               p   COPY public.administracion ("Nombre", "APaterno", "AMaterno", "Telefono", "Direccion", pass, "RFC") FROM stdin;
    public       postgres    false    196   �>       ?          0    16508    cita 
   TABLE DATA               `   COPY public.cita ("Id", "CURP_paciente", ced_prof_medico, fecha, descripcion, hora) FROM stdin;
    public       postgres    false    197   �>       @          0    16514    consultorio 
   TABLE DATA               C   COPY public.consultorio ("Id", "Medico", "Secretaria") FROM stdin;
    public       postgres    false    198   L?       A          0    16520    estudio 
   TABLE DATA               E   COPY public.estudio ("Id", "CURP_paciente", descripcion) FROM stdin;
    public       postgres    false    199   �?       B          0    16526 	   historial 
   TABLE DATA               t  COPY public.historial ("Id", "Ced_prof_medico", "Fecha", "AP_No_P", "APP", "AHF", "AGO", "Menarca", "Ritmo", "IVSA", "Cesarea", "FUM", "FPP", "DIU", "Hormonales", "Docma", "Papamicolau", "Padecimiento_actual", "T/A", "FC", "FR", "Temperatura", "Peso", "Talla", "Cabeza", "Torax", "Abdomen", "Extremidades", "Genitales", "Vascula_Perifericos", "CURP_paciente") FROM stdin;
    public       postgres    false    200   �?       C          0    16532    medico 
   TABLE DATA               �   COPY public.medico ("Ced_prof", "Nombre", "APaterno", "AMaterno", "Telefono", "Direccion", "Especialidad", "Escuela", pass) FROM stdin;
    public       postgres    false    201   �?       D          0    16538    paciente 
   TABLE DATA               �   COPY public.paciente ("CURP", "Nombre", "APaterno", "AMaterno", "Telefono", "Direccion", "Edad", "Edo_civil", "Ocupacion", "Escolaridad", "Lugar_de_origen", "Lugar_de_residencia", pass) FROM stdin;
    public       postgres    false    202   �@       E          0    16544    receta 
   TABLE DATA               \   COPY public.receta ("Id", "CURP_paciente", fecha, descripcion, ced_prof_medico) FROM stdin;
    public       postgres    false    203   "A       F          0    16550 
   secretaria 
   TABLE DATA               l   COPY public.secretaria ("RFC", "Nombre", "APaterno", "AMaterno", "Telefono", "Direccion", pass) FROM stdin;
    public       postgres    false    204   �A       T           0    0    cita_seq    SEQUENCE SET     7   SELECT pg_catalog.setval('public.cita_seq', 41, true);
            public       postgres    false    206            U           0    0    consultorio_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.consultorio_seq', 4, true);
            public       postgres    false    205            V           0    0    estudio_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.estudio_seq', 1, true);
            public       postgres    false    209            W           0    0    historial_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.historial_seq', 14, true);
            public       postgres    false    207            X           0    0 
   receta_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('public.receta_seq', 2, true);
            public       postgres    false    208            �
           2606    16557    medico Medico_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.medico
    ADD CONSTRAINT "Medico_pkey" PRIMARY KEY ("Ced_prof");
 >   ALTER TABLE ONLY public.medico DROP CONSTRAINT "Medico_pkey";
       public         postgres    false    201            �
           2606    16559 "   administracion administracion_pkey 
   CONSTRAINT     c   ALTER TABLE ONLY public.administracion
    ADD CONSTRAINT administracion_pkey PRIMARY KEY ("RFC");
 L   ALTER TABLE ONLY public.administracion DROP CONSTRAINT administracion_pkey;
       public         postgres    false    196            �
           2606    16561    cita cita_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.cita
    ADD CONSTRAINT cita_pkey PRIMARY KEY ("Id");
 8   ALTER TABLE ONLY public.cita DROP CONSTRAINT cita_pkey;
       public         postgres    false    197            �
           2606    16563    consultorio consultorio_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.consultorio
    ADD CONSTRAINT consultorio_pkey PRIMARY KEY ("Id");
 F   ALTER TABLE ONLY public.consultorio DROP CONSTRAINT consultorio_pkey;
       public         postgres    false    198            �
           2606    16565    estudio estudio_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.estudio
    ADD CONSTRAINT estudio_pkey PRIMARY KEY ("Id");
 >   ALTER TABLE ONLY public.estudio DROP CONSTRAINT estudio_pkey;
       public         postgres    false    199            �
           2606    16567    historial historial_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.historial
    ADD CONSTRAINT historial_pkey PRIMARY KEY ("Id");
 B   ALTER TABLE ONLY public.historial DROP CONSTRAINT historial_pkey;
       public         postgres    false    200            �
           2606    16626    consultorio medico_unk 
   CONSTRAINT     U   ALTER TABLE ONLY public.consultorio
    ADD CONSTRAINT medico_unk UNIQUE ("Medico");
 @   ALTER TABLE ONLY public.consultorio DROP CONSTRAINT medico_unk;
       public         postgres    false    198            �
           2606    16569    paciente paciente_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.paciente
    ADD CONSTRAINT paciente_pkey PRIMARY KEY ("CURP");
 @   ALTER TABLE ONLY public.paciente DROP CONSTRAINT paciente_pkey;
       public         postgres    false    202            �
           2606    16571    secretaria secretaria_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.secretaria
    ADD CONSTRAINT secretaria_pkey PRIMARY KEY ("RFC");
 D   ALTER TABLE ONLY public.secretaria DROP CONSTRAINT secretaria_pkey;
       public         postgres    false    204            �
           2606    16628    consultorio secretaria_unk 
   CONSTRAINT     ]   ALTER TABLE ONLY public.consultorio
    ADD CONSTRAINT secretaria_unk UNIQUE ("Secretaria");
 D   ALTER TABLE ONLY public.consultorio DROP CONSTRAINT secretaria_unk;
       public         postgres    false    198            �
           2606    16622    cita unk_curpfecha 
   CONSTRAINT     _   ALTER TABLE ONLY public.cita
    ADD CONSTRAINT unk_curpfecha UNIQUE ("CURP_paciente", fecha);
 <   ALTER TABLE ONLY public.cita DROP CONSTRAINT unk_curpfecha;
       public         postgres    false    197    197            �
           2606    16602    historial unk_insert_historial 
   CONSTRAINT     �   ALTER TABLE ONLY public.historial
    ADD CONSTRAINT unk_insert_historial UNIQUE ("Ced_prof_medico", "Fecha", "CURP_paciente");
 H   ALTER TABLE ONLY public.historial DROP CONSTRAINT unk_insert_historial;
       public         postgres    false    200    200    200            �
           2606    16604    historial constraint_fk_medico    FK CONSTRAINT     �   ALTER TABLE ONLY public.historial
    ADD CONSTRAINT constraint_fk_medico FOREIGN KEY ("Ced_prof_medico") REFERENCES public.medico("Ced_prof") ON DELETE RESTRICT;
 H   ALTER TABLE ONLY public.historial DROP CONSTRAINT constraint_fk_medico;
       public       postgres    false    2748    200    201            �
           2606    16609     historial constraint_fk_paciente    FK CONSTRAINT     �   ALTER TABLE ONLY public.historial
    ADD CONSTRAINT constraint_fk_paciente FOREIGN KEY ("CURP_paciente") REFERENCES public.paciente("CURP") ON DELETE RESTRICT;
 J   ALTER TABLE ONLY public.historial DROP CONSTRAINT constraint_fk_paciente;
       public       postgres    false    200    2750    202            �
           2606    16572 !   consultorio medico_de_consultorio    FK CONSTRAINT     �   ALTER TABLE ONLY public.consultorio
    ADD CONSTRAINT medico_de_consultorio FOREIGN KEY ("Medico") REFERENCES public.medico("Ced_prof");
 K   ALTER TABLE ONLY public.consultorio DROP CONSTRAINT medico_de_consultorio;
       public       postgres    false    201    2748    198            �
           2606    16577 %   consultorio secretaria_de_consultorio    FK CONSTRAINT     �   ALTER TABLE ONLY public.consultorio
    ADD CONSTRAINT secretaria_de_consultorio FOREIGN KEY ("Secretaria") REFERENCES public.secretaria("RFC");
 O   ALTER TABLE ONLY public.consultorio DROP CONSTRAINT secretaria_de_consultorio;
       public       postgres    false    2752    204    198            >   6   x�K��P@���y���E���FƆF�)�E��ɜE��%�Ȳ� ����� !�      ?   e   x�3��t
0T@����F�����F��%��%���V\�F�a1����؀��ŉ�9�E��X�0�� t��9n0`2 F��� ]�/�      @   1   x�3�,N��I,260U@ � 7gC4�e����&Rk��6F��� �;      A   2   x�3�t
0T@��ye��E
�
�y�9�ř�
�E�y%��\1z\\\ cb0      B      x������ � �      C   �   x�+N��I,260U@ N����"T��Z����&�����������$hlbjfna�	,�L�K��IT(.�L���ihdl�l�cD�{ �u�������8R��
Zbdhl��dNt����`FY(�C�L 9̹b���� ;R      D   }   x��u�60T@�ީe�y
h���E%�y�UUȂA���
�*����S2�R��3��8��8��0�3��4�3�2���M�shP�!�)I薁���	bS	������ I��`8�f/W� ��3�      E   �   x������420��50�52���W(,MU(NMJpŠK+`����M�N��:�*�d��~�A���A
.�!�����hʹ	�����������#�p�&��$*$b����� 6�;0      F   \   x�rs6T�N����"T��Z����&�������*�ilbjfnaə��P\Z��`hd�	�@Q�"� 7g#�����* �F�mH
�b���� g�*q     