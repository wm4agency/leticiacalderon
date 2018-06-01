<?php
    //echo "mail_inbound data retrieved from template";

    $email_message_headers="
        ";
    $email_message_body='<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
  <!--[if gte mso 9]><xml>
<o:OfficeDocumentSettings>
<o:AllowPNG/>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml><![endif]-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
  <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
  <title></title>
  <!--[if !mso]><!-- -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <!--<![endif]-->

  <style type="text/css" id="media-query">
    body {
      margin: 0;
      padding: 0; }

    table, tr, td {
      vertical-align: top;
      border-collapse: collapse; }

    .ie-browser table, .mso-container table {
      table-layout: fixed; }

    * {
      line-height: inherit; }

    a[x-apple-data-detectors=true] {
      color: inherit !important;
      text-decoration: none !important; }

    [owa] .img-container div, [owa] .img-container button {
      display: block !important; }

    [owa] .fullwidth button {
      width: 100% !important; }

    [owa] .block-grid .col {
      display: table-cell;
      float: none !important;
      vertical-align: top; }

    .ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid {
      width: 620px !important; }

    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
      line-height: 100%; }

    .ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4 {
      width: 204px !important; }

    .ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8 {
      width: 408px !important; }

    .ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {
      width: 310px !important; }

    .ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {
      width: 206px !important; }

    .ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {
      width: 155px !important; }

    .ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {
      width: 124px !important; }

    .ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {
      width: 103px !important; }

    .ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {
      width: 88px !important; }

    .ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {
      width: 77px !important; }

    .ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {
      width: 68px !important; }

    .ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {
      width: 62px !important; }

    .ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {
      width: 56px !important; }

    .ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {
      width: 51px !important; }

    @media only screen and (min-width: 640px) {
      .block-grid {
        width: 620px !important; }
      .block-grid .col {
        vertical-align: top; }
      .block-grid .col.num12 {
        width: 620px !important; }
      .block-grid.mixed-two-up .col.num4 {
        width: 204px !important; }
      .block-grid.mixed-two-up .col.num8 {
        width: 408px !important; }
      .block-grid.two-up .col {
        width: 310px !important; }
      .block-grid.three-up .col {
        width: 206px !important; }
      .block-grid.four-up .col {
        width: 155px !important; }
      .block-grid.five-up .col {
        width: 124px !important; }
      .block-grid.six-up .col {
        width: 103px !important; }
      .block-grid.seven-up .col {
        width: 88px !important; }
      .block-grid.eight-up .col {
        width: 77px !important; }
      .block-grid.nine-up .col {
        width: 68px !important; }
      .block-grid.ten-up .col {
        width: 62px !important; }
      .block-grid.eleven-up .col {
        width: 56px !important; }
      .block-grid.twelve-up .col {
        width: 51px !important; } }

    @media (max-width: 640px) {
      .block-grid, .col {
        min-width: 320px !important;
        max-width: 100% !important;
        display: block !important; }
      .block-grid {
        width: calc(100% - 40px) !important; }
      .col {
        width: 100% !important; }
      .col > div {
        margin: 0 auto; }
      img.fullwidth, img.fullwidthOnMobile {
        max-width: 100% !important; }
      .no-stack .col {
        min-width: 0 !important;
        display: table-cell !important; }
      .no-stack.two-up .col {
        width: 50% !important; }
      .no-stack.mixed-two-up .col.num4 {
        width: 33% !important; }
      .no-stack.mixed-two-up .col.num8 {
        width: 66% !important; }
      .no-stack.three-up .col.num4 {
        width: 33% !important; }
      .no-stack.four-up .col.num3 {
        width: 25% !important; }
      .mobile_hide {
        min-height: 0px;
        max-height: 0px;
        max-width: 0px;
        display: none;
        overflow: hidden;
        font-size: 0px; } }

  </style>
  </head>
  <body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF">
    <style type="text/css" id="media-query-bodytag"><!--
      @media (max-width: 520px) {
        .block-grid {
          min-width: 320px!important;
          max-width: 100%!important;
          width: 100%!important;
          display: block!important;
        }

        .col {
          min-width: 320px!important;
          max-width: 100%!important;
          width: 100%!important;
          display: block!important;
        }

        .col > div {
          margin: 0 auto;
        }

        img.fullwidth {
          max-width: 100%!important;
        }
        img.fullwidthOnMobile {
          max-width: 100%!important;
        }
        .no-stack .col {
          min-width: 0!important;
          display: table-cell!important;
        }
        .no-stack.two-up .col {
          width: 50%!important;
        }
        .no-stack.mixed-two-up .col.num4 {
          width: 33%!important;
        }
        .no-stack.mixed-two-up .col.num8 {
          width: 66%!important;
        }
        .no-stack.three-up .col.num4 {
          width: 33%!important;
        }
        .no-stack.four-up .col.num3 {
          width: 25%!important;
        }
        .mobile_hide {
          min-height: 0px!important;
          max-height: 0px!important;
          max-width: 0px!important;
          display: none!important;
          overflow: hidden!important;
          font-size: 0px!important;
        }
      }
      --></style>
    <!-- [if IE]><div class="ie-browser"><![endif]-->
    <p></p>
    <!-- [if mso]><div class="mso-container"><![endif]-->
    <table class="nl-container" style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; min-width: 320px; margin: 0 auto; background-color: #ffffff; width: 100%;" cellpadding="0" cellspacing="0">
      <tbody>
        <tr style="vertical-align: top;">
          <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;"><!-- [if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #FFFFFF;"><![endif]-->
            <div style="background-color: transparent;">
              <div style="margin: 0 auto; min-width: 320px; max-width: 620px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;" class="block-grid two-up ">
                <div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;"><!-- [if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 620px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]--> <!-- [if (mso)|(IE)]><td align="center" width="310" style=" width:310px; padding-right: 10px; padding-left: 10px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                  <div class="col num12" style="max-width: 620px; min-width: 310px; display: table-cell; vertical-align: top;">
                    <div style="background-color: transparent; width: 100% !important;"><!-- [if (!mso)&(!IE)]><!-->
                      <div style="border: 0px solid transparent; padding: 5px 10px 5px 10px;"><!--<![endif]-->
                        <div class=""><!-- [if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
                          <div style="color: #555555; line-height: 120%;" roboto="" tahoma="" verdana="" segoe="" sans-serif="" padding:="" 10px="">
                            <div style="font-family: Roboto, Tahoma, Verdana, Segoe, sans-serif; font-size: 12px; line-height: 14px; color: #555555; text-align: left;">
                              <p style="margin: 0; font-size: 14px; line-height: 17px;"><span style="font-size: 58px; line-height: 69px;"><strong>¡Bienvenido!</strong></span></p>
                            </div>
                          </div>
                          <!-- [if mso]></td></tr></table><![endif]--></div>
                        <!-- [if (!mso)&(!IE)]><!--></div>
                      <!--<![endif]--></div>
                  </div>
                  <!-- [if (mso)|(IE)]></td><td align="center" width="310" style=" width:310px; padding-right: 10px; padding-left: 10px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]--> <!-- [if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div>
              </div>
            </div>
            <div style="background-color: transparent;">
              <div style="margin: 0 auto; min-width: 320px; max-width: 620px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;" class="block-grid ">
                <div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;"><!-- [if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 620px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]--> <!-- [if (mso)|(IE)]><td align="center" width="620" style=" width:620px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                  <div class="col num12" style="min-width: 320px; max-width: 620px; display: table-cell; vertical-align: top;">
                    <div style="background-color: transparent; width: 100% !important;"><!-- [if (!mso)&(!IE)]><!-->
                      <div style="border: 0px solid transparent; padding: 5px 0px 5px 0px;"><!--<![endif]-->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="divider " style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                          <tbody>
                            <tr style="vertical-align: top;">
                              <td class="divider_inner" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; min-width: 100%; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding: 10px 10px 15px 10px;">
                                <table class="divider_content" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #222222; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                                  <tbody>
                                    <tr style="vertical-align: top;">
                                      <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"><span></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <!-- [if (!mso)&(!IE)]><!--></div>
                      <!--<![endif]--></div>
                  </div>
                  <!-- [if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div>
              </div>
            </div>
            <div style="background-color: transparent;">
              <div style="margin: 0 auto; min-width: 320px; max-width: 620px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;" class="block-grid ">
                <div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;"><!-- [if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 620px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]--> <!-- [if (mso)|(IE)]><td align="center" width="620" style=" width:620px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                  <div class="col num12" style="min-width: 320px; max-width: 620px; display: table-cell; vertical-align: top;">
                    <div style="background-color: transparent; width: 100% !important;"><!-- [if (!mso)&(!IE)]><!-->
                      <div style="border: 0px solid transparent; padding: 5px 0px 5px 0px;"><!--<![endif]-->
                        <div class=""><!-- [if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 30px;"><![endif]-->
                          <div style="line-height: 150%; color: #71777d;" lato="" tahoma="" verdana="" segoe="" sans-serif="" padding:="" 10px="" 30px="">
                            <div style="font-size: 12px; line-height: 18px; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif; color: #71777d; text-align: left;">
                              <p style="margin: 0; font-size: 14px; line-height: 21px;">Enhorabuena, '.$nombre.', bienvenido al proyecto para <strong>GOBERNAR BIEN, ES POSIBLE</strong> con tu ayuda. Tenerte en el equipo nos hace mejores y más fuertes en todos los sentidos, gracias por sumarte.</p>
                              <p style="margin: 0; font-size: 14px; line-height: 21px;"> </p>
                              <p style="margin: 0; font-size: 14px; line-height: 21px;">Con tu participación y la de todos, haremos de éste un municipio de oportunidades y soluciones, en el que todas las voces son escuchadas y todos los problemas atendidos y en el que los recursos públicos sirvan a la comunidad.</p>
                              <p style="margin: 0; font-size: 14px; line-height: 21px;"> </p>
                              <p style="margin: 0; font-size: 14px; line-height: 21px;">Por favor mantente atento a las comunicaciones del equipo, en breve nos pondremos en contacto contigo para incluirte en las tareas que el equipo está realizando para llevar a todos en el municipio los compromisos que asumiremos en esta administración.</p>
                            </div>
                          </div>
                          <!-- [if mso]></td></tr></table><![endif]--></div>
                        <!-- [if (!mso)&(!IE)]><!--></div>
                      <!--<![endif]--></div>
                  </div>
                  <!-- [if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div>
              </div>
            </div>
            <div style="background-color: transparent;">
              <div style="margin: 0 auto; min-width: 320px; max-width: 620px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;" class="block-grid two-up ">
                <div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;"><!-- [if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 620px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]--> <!-- [if (mso)|(IE)]><td align="center" width="310" style=" width:310px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                  <div class="col num6" style="max-width: 320px; min-width: 310px; display: table-cell; vertical-align: top;">
                    <div style="background-color: transparent; width: 100% !important;"><!-- [if (!mso)&(!IE)]><!-->
                      <div style="border: 0px solid transparent; padding: 5px 0px 5px 0px;"><!--<![endif]-->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="divider " style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                          <tbody>
                            <tr style="vertical-align: top;">
                              <td class="divider_inner" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; min-width: 100%; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding: 10px;">
                                <table class="divider_content" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 0px solid transparent; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                                  <tbody>
                                    <tr style="vertical-align: top;">
                                      <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"><span></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <!-- [if (!mso)&(!IE)]><!--></div>
                      <!--<![endif]--></div>
                  </div>
                  <!-- [if (mso)|(IE)]></td><td align="center" width="310" style=" width:310px; padding-right: 10px; padding-left: 10px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                  <div class="col num6" style="max-width: 320px; min-width: 310px; display: table-cell; vertical-align: top;">
                    <div style="background-color: transparent; width: 100% !important;"><!-- [if (!mso)&(!IE)]><!-->
                      <div style="border: 0px solid transparent; padding: 5px 10px 5px 10px;"><!--<![endif]-->
                        <div class=""><!-- [if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 15px; padding-bottom: 0px;"><![endif]-->
                          <div style="line-height: 120%; color: #555555;" lato="" tahoma="" verdana="" segoe="" sans-serif="" padding:="" 15px="" 0px="">
                            <div style="font-size: 12px; line-height: 14px; color: #555555;" lato="" tahoma="" verdana="" segoe="" sans-serif="" text-align:="" left="">
                              <p style="margin: 0; font-size: 14px; line-height: 17px; text-align: right;"><span style="color: #000000; font-size: 14px; line-height: 16px;"><strong>Leticia Calderón</strong></span></p>
                            </div>
                          </div>
                          <!-- [if mso]></td></tr></table><![endif]--></div>
                        <div class=""><!-- [if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 5px;"><![endif]-->
                          <div style="line-height: 120%; color: #555555;" lato="" tahoma="" verdana="" segoe="" sans-serif="" padding:="" 0px="" 5px="">
                            <div style="font-size: 12px; line-height: 14px; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif; color: #555555; text-align: left;">
                              <p style="margin: 0; font-size: 14px; line-height: 17px; text-align: right;"><span style="font-size: 12px; line-height: 14px;">Candidata a Presidenta Municipal</span></p>
                              <p style="margin: 0; font-size: 14px; line-height: 17px; text-align: right;"><span style="font-size: 12px; line-height: 14px;">Municipio de Valle de Chalco Solidaridad</span></p>
                            </div>
                          </div>
                          <!-- [if mso]></td></tr></table><![endif]--></div>
                        <!-- [if (!mso)&(!IE)]><!--></div>
                      <!--<![endif]--></div>
                  </div>
                  <!-- [if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div>
              </div>
            </div>
            <div style="background-color: transparent;">
              <div style="margin: 0 auto; min-width: 320px; max-width: 620px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;" class="block-grid ">
                <div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;"><!-- [if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 620px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]--> <!-- [if (mso)|(IE)]><td align="center" width="620" style=" width:620px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                  <div class="col num12" style="min-width: 320px; max-width: 620px; display: table-cell; vertical-align: top;">
                    <div style="background-color: transparent; width: 100% !important;"><!-- [if (!mso)&(!IE)]><!-->
                      <div style="border: 0px solid transparent; padding: 5px 0px 5px 0px;"><!--<![endif]-->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="divider " style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                          <tbody>
                            <tr style="vertical-align: top;">
                              <td class="divider_inner" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; min-width: 100%; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding: 20px 10px 20px 10px;">
                                <table class="divider_content" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px dotted #CCCCCC; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                                  <tbody>
                                    <tr style="vertical-align: top;">
                                      <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"><span></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <!-- [if (!mso)&(!IE)]><!--></div>
                      <!--<![endif]--></div>
                  </div>
                  <!-- [if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div>
              </div>
            </div>
            <div style="background-color: transparent;">
              <div style="margin: 0 auto; min-width: 320px; max-width: 620px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;" class="block-grid four-up ">
                <div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;"><!-- [if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 620px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]--> <!-- [if (mso)|(IE)]><td align="center" width="155" style=" width:155px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                  <div class="col num3" style="max-width: 320px; min-width: 155px; display: table-cell; vertical-align: top;">
                    <div style="background-color: transparent; width: 100% !important;"><!-- [if (!mso)&(!IE)]><!-->
                      <div style="border: 0px solid transparent; padding: 5px 0px 5px 0px;"><!--<![endif]-->
                        <div class=""><!-- [if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;"><![endif]-->
                          <div style="line-height: 120%; color: #000000;" lato="" tahoma="" verdana="" segoe="" sans-serif="" padding:="" 5px="">
                            <div style="font-size: 12px; line-height: 14px; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif; color: #000000; text-align: left;">
                              <p style="margin: 0; font-size: 14px; line-height: 17px; text-align: center;"><span style="color: #000000;"><a href="http://www.leticiacalderon.mx" target="_blank" style="color: #000000;"><span style="font-size: 12px; line-height: 14px;">web</span></a></span></p>
                            </div>
                          </div>
                          <a href="http://www.ricardoastudillo.info" target="_blank"><!-- [if mso]></td></tr></table><![endif]--></a></div>
                        <a href="http://www.ricardoastudillo.info" target="_blank"><!-- [if (!mso)&(!IE)]><!--></a></div>
                      <a href="http://www.ricardoastudillo.info" target="_blank"><!--<![endif]--></a></div>
                  </div>
                  <a href="http://www.ricardoastudillo.info" target="_blank"><!-- [if (mso)|(IE)]></td><td align="center" width="155" style=" width:155px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]--></a>
                  <div class="col num3" style="max-width: 320px; min-width: 155px; display: table-cell; vertical-align: top;">
                    <div style="background-color: transparent; width: 100% !important;"><a href="http://www.ricardoastudillo.info" target="_blank"><!-- [if (!mso)&(!IE)]><!--></a>
                      <div style="border: 0px solid transparent; padding: 5px 0px 5px 0px;"><a href="http://www.ricardoastudillo.info" target="_blank"><!--<![endif]--></a>
                        <div class=""><a href="http://www.ricardoastudillo.info" target="_blank"><!-- [if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;"><![endif]--></a>
                          <div style="line-height: 120%; color: #000000;" lato="" tahoma="" verdana="" segoe="" sans-serif="" padding:="" 5px="">
                            <div style="font-size: 12px; line-height: 14px; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif; color: #000000; text-align: left;">
                              <p style="margin: 0; font-size: 14px; line-height: 17px; text-align: center;"><span style="color: #000000;"><a href="https://www.facebook.com/LeticiaCalderonR/" target="_blank" style="color: #000000;"><span style="font-size: 12px; line-height: 14px;">facebook</span></a></span></p>
                            </div>
                          </div>
                          <a href="http://www.ricardoastudillo.info" target="_blank"><!-- [if mso]></td></tr></table><![endif]--></a></div>
                        <!-- [if (!mso)&(!IE)]><!--></div>
                      <!--<![endif]--></div>
                  </div>
                  <!-- [if (mso)|(IE)]></td><td align="center" width="155" style=" width:155px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                  <div class="col num3" style="max-width: 320px; min-width: 155px; display: table-cell; vertical-align: top;">
                    <div style="background-color: transparent; width: 100% !important;"><!-- [if (!mso)&(!IE)]><!-->
                      <div style="border: 0px solid transparent; padding: 5px 0px 5px 0px;"><!--<![endif]-->
                        <div class=""><!-- [if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;"><![endif]-->
                          <div style="line-height: 120%; color: #000000;" lato="" tahoma="" verdana="" segoe="" sans-serif="" padding:="" 5px="">
                            <div style="font-size: 12px; line-height: 14px; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif; color: #000000; text-align: left;">
                              <p style="margin: 0; font-size: 14px; line-height: 17px; text-align: center;"><span style="font-size: 12px; line-height: 14px;"><a style="color: #000000; text-decoration: none;" href="https://twitter.com/LetiCalderonR" target="_blank" rel="noopener">twitter</a></span></p>
                            </div>
                          </div>
                          <!-- [if mso]></td></tr></table><![endif]--></div>
                        <!-- [if (!mso)&(!IE)]><!--></div>
                      <!--<![endif]--></div>
                  </div>
                  <!-- [if (mso)|(IE)]></td><td align="center" width="155" style=" width:155px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                  <div class="col num3" style="max-width: 320px; min-width: 155px; display: table-cell; vertical-align: top;">
                    <div style="background-color: transparent; width: 100% !important;"><!-- [if (!mso)&(!IE)]><!-->
                      <div style="border: 0px solid transparent; padding: 5px 0px 5px 0px;"><!--<![endif]-->
                        <div class=""><!-- [if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px;"><![endif]-->
                          <div style="line-height: 120%; color: #000000;" lato="" tahoma="" verdana="" segoe="" sans-serif="" padding:="" 5px="">
                            <div style="font-size: 12px; line-height: 14px; color: #000000;" lato="" tahoma="" verdana="" segoe="" sans-serif="" text-align:="" left="">
                              <div class="txtTinyMce-wrapper" style="font-size: 12px; line-height: 14px;">
                                <div class="txtTinyMce-wrapper" style="font-size: 12px; line-height: 14px;">
                                  <div class="txtTinyMce-wrapper" style="font-size: 12px; line-height: 14px;">
                                    <p style="margin: 0; font-size: 14px; line-height: 16px; text-align: center;"><span style="font-size: 12px; line-height: 14px;"><a style="color: #000000; text-decoration: none;" href="https://www.instagram.com/leticalderonr/" target="_blank">instagram</a></span></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- [if mso]></td></tr></table><![endif]--></div>
                        <!-- [if (!mso)&(!IE)]><!--></div>
                      <!--<![endif]--></div>
                  </div>
                  <!-- [if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div>
              </div>
            </div>
            <div style="background-color: transparent;">
              <div style="margin: 0 auto; min-width: 320px; max-width: 620px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;" class="block-grid ">
                <div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;"><!-- [if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 620px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]--> <!-- [if (mso)|(IE)]><td align="center" width="620" style=" width:620px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                  <div class="col num12" style="min-width: 320px; max-width: 620px; display: table-cell; vertical-align: top;">
                    <div style="background-color: transparent; width: 100% !important;"><!-- [if (!mso)&(!IE)]><!-->
                      <div style="border: 0px solid transparent; padding: 5px 0px 5px 0px;"><!--<![endif]-->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="divider " style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                          <tbody>
                            <tr style="vertical-align: top;">
                              <td class="divider_inner" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; min-width: 100%; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding: 20px 10px 20px 10px;">
                                <table class="divider_content" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px dotted #CCCCCC; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                                  <tbody>
                                    <tr style="vertical-align: top;">
                                      <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"><span></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <!-- [if (!mso)&(!IE)]><!--></div>
                      <!--<![endif]--></div>
                  </div>
                  <!-- [if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div>
              </div>
            </div>
            <div style="background-color: transparent;">
              <div style="margin: 0 auto; min-width: 320px; max-width: 620px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;" class="block-grid ">
                <div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;"><!-- [if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 620px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]--> <!-- [if (mso)|(IE)]><td align="center" width="620" style=" width:620px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                  <div class="col num12" style="min-width: 320px; max-width: 620px; display: table-cell; vertical-align: top;">
                    <div style="background-color: transparent; width: 100% !important;"><!-- [if (!mso)&(!IE)]><!-->
                      <div style="border: 0px solid transparent; padding: 5px 0px 5px 0px;"><!--<![endif]-->
                        <div class=""><!-- [if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
                          <div style="line-height: 120%; color: #555555;" lato="" tahoma="" verdana="" segoe="" sans-serif="" padding:="" 10px="">
                            <div style="font-size: 12px; line-height: 14px; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif; color: #555555; text-align: left;">
                              <p style="margin: 0; font-size: 14px; line-height: 17px;"><span style="font-size: 12px; line-height: 14px;">Copyright © 2018 Leticia Calderón Ramírez </span><br /><span style="font-size: 12px; line-height: 14px;">Recibes este correo en atención a tu contacto en leticiacalderon.mx</span></p>
                              <p style="margin: 0; font-size: 14px; line-height: 17px;"><span style="font-size: 12px; line-height: 14px;"><a style="color: #71777d; text-decoration: underline;" href="beefree.io" target="_blank" rel="noopener noreferrer"></a></span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </body></html>';
$message =$email_message_headers.$email_message_body."\n\n";
