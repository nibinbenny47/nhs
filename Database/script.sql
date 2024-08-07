USE [master]
GO
/****** Object:  Database [db_nhs]    Script Date: 10-07-2024 14:16:53 ******/
CREATE DATABASE [db_nhs]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'db_nhs', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\db_nhs.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'db_nhs_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\db_nhs_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [db_nhs] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [db_nhs].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [db_nhs] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [db_nhs] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [db_nhs] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [db_nhs] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [db_nhs] SET ARITHABORT OFF 
GO
ALTER DATABASE [db_nhs] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [db_nhs] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [db_nhs] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [db_nhs] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [db_nhs] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [db_nhs] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [db_nhs] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [db_nhs] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [db_nhs] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [db_nhs] SET  DISABLE_BROKER 
GO
ALTER DATABASE [db_nhs] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [db_nhs] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [db_nhs] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [db_nhs] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [db_nhs] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [db_nhs] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [db_nhs] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [db_nhs] SET RECOVERY FULL 
GO
ALTER DATABASE [db_nhs] SET  MULTI_USER 
GO
ALTER DATABASE [db_nhs] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [db_nhs] SET DB_CHAINING OFF 
GO
ALTER DATABASE [db_nhs] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [db_nhs] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [db_nhs] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [db_nhs] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'db_nhs', N'ON'
GO
ALTER DATABASE [db_nhs] SET QUERY_STORE = OFF
GO
USE [db_nhs]
GO
/****** Object:  Table [dbo].[tbl_neuromodulation]    Script Date: 10-07-2024 14:16:53 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbl_neuromodulation](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[firstname] [nvarchar](50) NULL,
	[surname] [nvarchar](50) NULL,
	[date_of_birth] [date] NULL,
	[age] [int] NULL,
	[submitted_at] [datetime] NULL,
	[q1] [int] NULL,
	[q2] [int] NULL,
	[q3] [int] NULL,
	[q4] [int] NULL,
	[q5] [int] NULL,
	[q6] [int] NULL,
	[q7] [int] NULL,
	[q8] [int] NULL,
	[q9] [int] NULL,
	[q10] [int] NULL,
	[q11] [int] NULL,
	[q12] [int] NULL,
	[total_score] [int] NULL,
 CONSTRAINT [PK_tbl_neuromodulation] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbl_user]    Script Date: 10-07-2024 14:16:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbl_user](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[email] [nvarchar](50) NULL,
	[password] [nvarchar](50) NULL,
 CONSTRAINT [PK_tbl_user] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[tbl_neuromodulation] ON 

INSERT [dbo].[tbl_neuromodulation] ([id], [firstname], [surname], [date_of_birth], [age], [submitted_at], [q1], [q2], [q3], [q4], [q5], [q6], [q7], [q8], [q9], [q10], [q11], [q12], [total_score]) VALUES (1, N'Nibin', N'Benny', CAST(N'2000-07-04' AS Date), 24, CAST(N'2024-07-10T12:49:16.000' AS DateTime), 38, 6, 4, 8, 7, 8, 2, 5, 8, 9, 8, 2, 67)
INSERT [dbo].[tbl_neuromodulation] ([id], [firstname], [surname], [date_of_birth], [age], [submitted_at], [q1], [q2], [q3], [q4], [q5], [q6], [q7], [q8], [q9], [q10], [q11], [q12], [total_score]) VALUES (4, N'Jais', N'Raju', CAST(N'1999-06-16' AS Date), 25, CAST(N'2024-07-10T00:33:08.000' AS DateTime), 67, 3, 4, 6, 1, 4, 3, 9, 6, 3, 4, 6, 49)
INSERT [dbo].[tbl_neuromodulation] ([id], [firstname], [surname], [date_of_birth], [age], [submitted_at], [q1], [q2], [q3], [q4], [q5], [q6], [q7], [q8], [q9], [q10], [q11], [q12], [total_score]) VALUES (8, N'Vijeesh', N'Raj', CAST(N'2009-06-12' AS Date), 15, CAST(N'2024-07-10T10:39:23.000' AS DateTime), 57, 7, 2, 4, 4, 6, 2, 5, 7, 1, 1, 8, 47)
INSERT [dbo].[tbl_neuromodulation] ([id], [firstname], [surname], [date_of_birth], [age], [submitted_at], [q1], [q2], [q3], [q4], [q5], [q6], [q7], [q8], [q9], [q10], [q11], [q12], [total_score]) VALUES (10, N'Maria', N'Saju', CAST(N'2008-06-06' AS Date), 16, CAST(N'2024-07-10T12:15:55.000' AS DateTime), 59, 2, 2, 5, 6, 7, 6, 2, 1, 6, 5, 8, 50)
INSERT [dbo].[tbl_neuromodulation] ([id], [firstname], [surname], [date_of_birth], [age], [submitted_at], [q1], [q2], [q3], [q4], [q5], [q6], [q7], [q8], [q9], [q10], [q11], [q12], [total_score]) VALUES (11, N'Sara', N'Reji', CAST(N'2017-11-23' AS Date), 6, CAST(N'2024-07-10T12:16:33.000' AS DateTime), 45, 5, 4, 4, 2, 4, 6, 1, 6, 8, 5, 9, 54)
INSERT [dbo].[tbl_neuromodulation] ([id], [firstname], [surname], [date_of_birth], [age], [submitted_at], [q1], [q2], [q3], [q4], [q5], [q6], [q7], [q8], [q9], [q10], [q11], [q12], [total_score]) VALUES (12, N'James', N'Paul', CAST(N'2008-11-13' AS Date), 15, CAST(N'2024-07-10T12:42:29.000' AS DateTime), 78, 5, 4, 1, 4, 5, 1, 1, 1, 3, 4, 5, 34)
SET IDENTITY_INSERT [dbo].[tbl_neuromodulation] OFF
GO
SET IDENTITY_INSERT [dbo].[tbl_user] ON 

INSERT [dbo].[tbl_user] ([id], [email], [password]) VALUES (1, N'jais@gmail.com', N'jais')
INSERT [dbo].[tbl_user] ([id], [email], [password]) VALUES (2, N'admin@admin.com', N'admin')
INSERT [dbo].[tbl_user] ([id], [email], [password]) VALUES (3, N'admin@admin.com', N'csdc')
INSERT [dbo].[tbl_user] ([id], [email], [password]) VALUES (4, N'nibin@gmail.com', N'1234')
INSERT [dbo].[tbl_user] ([id], [email], [password]) VALUES (5, N'nibinbenny47@gmail.com', N'123')
INSERT [dbo].[tbl_user] ([id], [email], [password]) VALUES (6, N'aju@gmail.com', N'123')
INSERT [dbo].[tbl_user] ([id], [email], [password]) VALUES (7, N'mary@gmail.com', N'1234')
INSERT [dbo].[tbl_user] ([id], [email], [password]) VALUES (8, N'jeevan@gmail.com', N'123')
INSERT [dbo].[tbl_user] ([id], [email], [password]) VALUES (9, N'basil@gmail.com', N'basil')
INSERT [dbo].[tbl_user] ([id], [email], [password]) VALUES (10, N'admin@gmail.com', N'admin')
INSERT [dbo].[tbl_user] ([id], [email], [password]) VALUES (11, N'eliza@gmail.com', N'eliza')
SET IDENTITY_INSERT [dbo].[tbl_user] OFF
GO
/****** Object:  StoredProcedure [dbo].[CheckLoginDetails]    Script Date: 10-07-2024 14:16:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[CheckLoginDetails]
    @Email NVARCHAR(50)
   
AS
BEGIN
    SET NOCOUNT ON;
    SELECT * FROM tbl_user 
    WHERE email = @Email ;
END;
GO
/****** Object:  StoredProcedure [dbo].[Deleteneuromodulation]    Script Date: 10-07-2024 14:16:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[Deleteneuromodulation]
    @id INT
AS
BEGIN
    SET NOCOUNT ON;

    DELETE FROM tbl_neuromodulation
    WHERE id = @id;
END;
GO
/****** Object:  StoredProcedure [dbo].[GetLoginDetails]    Script Date: 10-07-2024 14:16:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[GetLoginDetails]
    @Email NVARCHAR(50),
    @Password NVARCHAR(50)
AS
BEGIN
    SET NOCOUNT ON;
    SELECT * FROM tbl_user 
    WHERE email = @Email AND password = @Password;
END;
GO
/****** Object:  StoredProcedure [dbo].[GetNeuromodulationDetails]    Script Date: 10-07-2024 14:16:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[GetNeuromodulationDetails]
AS
BEGIN
	SET NOCOUNT ON;
  
    SELECT id, firstname,surname,date_of_birth,age,submitted_at,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,total_score
    FROM tbl_neuromodulation;
END

GO
/****** Object:  StoredProcedure [dbo].[GetPatientResponseById]    Script Date: 10-07-2024 14:16:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[GetPatientResponseById]
    @id INT
AS
BEGIN
SET NOCOUNT ON;
    SELECT 
		id,
        firstname,
        surname,
        date_of_birth,
        age,
        q1,
        q2,
        q3,
        q4,
        q5,
        q6,
        q7,
        q8,
        q9,
        q10,
        q11,
        q12,
        submitted_at,
        total_score 
    FROM tbl_neuromodulation 
    WHERE id = @id;
END;
GO
/****** Object:  StoredProcedure [dbo].[Insertneuromodulation]    Script Date: 10-07-2024 14:16:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[Insertneuromodulation]
@firstname NVARCHAR(50),
    @surname NVARCHAR(50),
    @date_of_birth DATE,
    @age INT,
    @q1 INT,
    @q2 INT,
    @q3 INT,
    @q4 INT,
    @q5 INT,
    @q6 INT,
    @q7 INT,
    @q8 INT,
    @q9 INT,
    @q10 INT,
    @q11 INT,
    @q12 INT,
    @submitted_at DATETIME,
    @total_score INT
AS
BEGIN
	SET NOCOUNT ON;
  
    INSERT INTO tbl_neuromodulation (
            firstname,
            surname,
            date_of_birth,
            age,
            q1,
            q2,
            q3,
            q4,
            q5,
            q6,
            q7,
            q8,
            q9,
            q10,
            q11,
            q12,
            submitted_at,
            total_score
        ) VALUES (
            @firstname,
            @surname,
            @date_of_birth,
            @age,
            @q1,
            @q2,
            @q3,
            @q4,
            @q5,
            @q6,
            @q7,
            @q8,
            @q9,
            @q10,
            @q11,
            @q12,
            @submitted_at,
            @total_score
        );
END
GO
/****** Object:  StoredProcedure [dbo].[Insertuser]    Script Date: 10-07-2024 14:16:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[Insertuser]
@email NVARCHAR(50),
@password NVARCHAR(50)
as
begin
set nocount on
insert into tbl_user(email,password) values(@email,@password)
end
GO
/****** Object:  StoredProcedure [dbo].[Updateneuromodulation]    Script Date: 10-07-2024 14:16:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[Updateneuromodulation]
    @id INT,
    @firstname NVARCHAR(50),
    @surname NVARCHAR(50),
    @date_of_birth DATE,
    @age INT,
    @q1 INT,
    @q2 INT,
    @q3 INT,
    @q4 INT,
    @q5 INT,
    @q6 INT,
    @q7 INT,
    @q8 INT,
    @q9 INT,
    @q10 INT,
    @q11 INT,
    @q12 INT,
    @submitted_at DATETIME,
    @total_score INT
AS
BEGIN
    SET NOCOUNT ON;

    UPDATE tbl_neuromodulation
    SET 
        firstname = @firstname,
        surname = @surname,
        date_of_birth = @date_of_birth,
        age = @age,
        q1 = @q1,
        q2 = @q2,
        q3 = @q3,
        q4 = @q4,
        q5 = @q5,
        q6 = @q6,
        q7 = @q7,
        q8 = @q8,
        q9 = @q9,
        q10 = @q10,
        q11 = @q11,
        q12 = @q12,
        submitted_at = @submitted_at,
        total_score = @total_score
    WHERE id = @id;
END;
GO
USE [master]
GO
ALTER DATABASE [db_nhs] SET  READ_WRITE 
GO
