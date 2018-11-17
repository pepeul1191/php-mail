<?php

$sp = <<<EOD
<tr>
  <td style="background-color: #ffffff;">
      <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
          <tr>
              <td style="padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                  <h1 style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 25px; line-height: 30px; color: #333333; font-weight: normal;">Bienvenido <b>%name</b> a Consulting Ya</h1>
                  <p style="margin: 0;">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p>
              </td>
          </tr>
          <tr>
              <td style="padding: 0 20px;">
                  <!-- Button : BEGIN -->
                  <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: auto;">
                      <tr>
                          <td class="button-td button-td-primary" style="border-radius: 4px; background: #4b506c;">
                               <a class="button-a button-a-primary" href="%activation_url" style="background: #4b506c; border: 1px solid #4b506c; font-family: sans-serif; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff; display: block; border-radius: 0px;">Activar Cuenta</a>
                          </td>
                      </tr>
                  </table>
                  <!-- Button : END -->
              </td>
          </tr>
          <tr>
              <td style="padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                  <h2 style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 18px; line-height: 22px; color: #333333; font-weight: bold;">Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</h2>
                  <ul style="padding: 0; margin: 0 0 10px 0; list-style-type: disc;">
                      <li style="margin:0 0 10px 30px;" class="list-item-first">A list item.</li>
                      <li style="margin:0 0 10px 30px;">Another list item here.</li>
                      <li style="margin: 0 0 0 30px;" class="list-item-last">Everyone gets a list item, list items for everyone!</li>
                  </ul>
                  <p style="margin: 0;">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p>
              </td>
          </tr>
      </table>
  </td>
</tr>
<!-- 1 Column Text + Button : END -->

<!-- 2 Even Columns : BEGIN -->
<tr>
  <td height="100%" valign="top" width="100%" style="padding: 0 10px 40px 10px; background-color: #ffffff;">
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:560px;">
          <tr>
              <td valign="top" width="50%">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 14px; text-align: left;">
                      <tr>
                          <td style="text-align: center; padding: 0 10px;">
                              <a href="%terms_and_conditions">
                                  <img src="https://via.placeholder.com/200" width="200" height="" alt="alt_text" border="0" style="width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;">
                              </a>
                          </td>
                      </tr>
                      <tr>
                          <td style="text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px 10px 0;">
                             <p style="margin: 0; text-align:center;">Términos y Condiciones</p>
                          </td>
                      </tr>
                  </table>
              </td>
              <td valign="top" width="50%">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 14px; text-align: left;">
                      <tr>
                          <td style="text-align: center; padding: 0 10px;">
                              <a href="%tutorial">
                                  <img src="https://via.placeholder.com/200" width="200" height="" alt="alt_text" border="0" style="width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;">
                              </a>
                          </td>
                      </tr>
                      <tr>
                          <td style="text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px 10px 0;">
                              <p style="margin: 0; text-align:center;">Manual de Uso</p>
                          </td>
                      </tr>
                  </table>
              </td>
          </tr>
      </table>
  </td>
</tr>
EOD;

$en = <<<EOD
<tr>
  <td style="background-color: #ffffff;">
      <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
          <tr>
              <td style="padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                  <h1 style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 25px; line-height: 30px; color: #333333; font-weight: normal;">Wellcome <b>%name</b> to Consulting Ya</h1>
                  <p style="margin: 0;">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p>
              </td>
          </tr>
          <tr>
              <td style="padding: 0 20px;">
                  <!-- Button : BEGIN -->
                  <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: auto;">
                      <tr>
                          <td class="button-td button-td-primary" style="border-radius: 4px; background: #4b506c;">
                               <a class="button-a button-a-primary" href="%activation_url" style="background: #4b506c; border: 1px solid #4b506c; font-family: sans-serif; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff; display: block; border-radius: 0px;">Activate Account</a>
                          </td>
                      </tr>
                  </table>
                  <!-- Button : END -->
              </td>
          </tr>
          <tr>
              <td style="padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                  <h2 style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 18px; line-height: 22px; color: #333333; font-weight: bold;">Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</h2>
                  <ul style="padding: 0; margin: 0 0 10px 0; list-style-type: disc;">
                      <li style="margin:0 0 10px 30px;" class="list-item-first">A list item.</li>
                      <li style="margin:0 0 10px 30px;">Another list item here.</li>
                      <li style="margin: 0 0 0 30px;" class="list-item-last">Everyone gets a list item, list items for everyone!</li>
                  </ul>
                  <p style="margin: 0;">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p>
              </td>
          </tr>
      </table>
  </td>
</tr>
<!-- 1 Column Text + Button : END -->

<!-- 2 Even Columns : BEGIN -->
<tr>
  <td height="100%" valign="top" width="100%" style="padding: 0 10px 40px 10px; background-color: #ffffff;">
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:560px;">
          <tr>
              <td valign="top" width="50%">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 14px; text-align: left;">
                      <tr>
                          <td style="text-align: center; padding: 0 10px;">
                              <a href="%terms_and_conditions">
                                  <img src="https://via.placeholder.com/200" width="200" height="" alt="alt_text" border="0" style="width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;">
                              </a>
                          </td>
                      </tr>
                      <tr>
                          <td style="text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px 10px 0;">
                             <p style="margin: 0; text-align:center;">Terms and Conditions</p>
                          </td>
                      </tr>
                  </table>
              </td>
              <td valign="top" width="50%">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 14px; text-align: left;">
                      <tr>
                          <td style="text-align: center; padding: 0 10px;">
                              <a href="%tutorial">
                                  <img src="https://via.placeholder.com/200" width="200" height="" alt="alt_text" border="0" style="width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;">
                              </a>
                          </td>
                      </tr>
                      <tr>
                          <td style="text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px 10px 0;">
                              <p style="margin: 0; text-align:center;">User Manual.</p>
                          </td>
                      </tr>
                  </table>
              </td>
          </tr>
      </table>
  </td>
</tr>
EOD;

return [
  'sp' => $sp,
  'en' => $en,
];
